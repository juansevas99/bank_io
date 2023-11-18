import Swal from "sweetalert2";
import storage from './Storage/storage';

export const show_alerta = (msj, icon) => {
    Swal.fire({ title:msj, icon:icon, buttonStyling:true});
}

export const sendRequest = async(method, params, url, redir="", token=true) => {
    if(token){
        const authToken = storage.get('authToken');
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + authToken;
    }
    let res;
    await axios({method:method, url:url, data:params}).then(
        response => {
            res = response.data,
            (method != 'GET') ? show_alerta(response.data.message, 'success'):'',
            setTimeout( () => (redir !=='') ? window.location.href = redir : '', 2000),
            console.log(res)
        }
    ).catch((errors) => {
        console.log(errors);
        let desc = '';
        if(errors.response){
            res = errors.response.data,
        errors.response.data.errors.map( (e) => {desc = desc + ' ' + e})
        show_alerta(desc, 'error')
        } else {
            console.log(errors.message);
            desc = errors.message;
            show_alerta(desc, 'error');
        }
        
    })
    return res;
}

export const confirmation = async(name, data, url, redir) => {
    const alert = Swal.mixin({buttonStyling:true});
    console.log(url);
    console.log(data);
    alert.fire({
        title:'Are you sure delete ' + name + ' ?',
        icon: 'question', showCancelButton:true,
        confirmButtonText: '<i class="fa-solid fa-check"></i> Yes, delete',
        cancelButtonText:'<i class="fa-solid fa-ban"></i> Cancel'
    }).then( (result) => {
        if(result.isConfirmed) {
            sendRequest('POST',data, url,redir);
            
        }
    });
}

export default show_alerta;