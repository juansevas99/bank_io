function user_crear(){
	
	document
	.querySelector('[name="roles_Id_rol"]')
	.addEventListener("focus", () => {
		
		fetch(URL+"roles/list")
			.then((response) => {
				if (response.ok == false || response.status > 299) {
					return Promise.reject({ err: "Error, no se encontro el archivo" })
				}
				return response.json()
			})
			.then((response) => {
				options = ""
				console.log(response);
				for (let i = 0; i < response[0].length; i++) {
					options +=
						"<option value=" +
						response[0][i].Id +
						">" +
						response[0][i].Rol +
						"</option>"
				}

				document.querySelector('[name="roles_Id_rol"]').innerHTML =
					options
			})

			.catch((err) => {
				console.error("Error Servidor !!" + err.err)
			})
	})

}
function display(response) {
	$cabecera = document.querySelector("#tabla-admin > .cabecera")
	$cadenaCabecera = ""
	for (let i = 0; i < Object.keys(response[0]).length; i++) {
		$cadenaCabecera += "<th>" + Object.keys(response[0])[i] + "</th>"
	}
	$cadenaCabecera += "<th colspan=3>Accciones</th>"
	$cabecera.innerHTML = $cadenaCabecera
	$cuerpo = document.querySelector("#tabla-admin > .cuerpo")
	$cadenaCuerpo = ""
	for (let j = 0; j < response.length; j++) {
		$cadenaCuerpo += "<tr>"
		for (let k = 0; k < Object.keys(response[j]).length; k++) {
			$cadenaCuerpo += "<td>" + response[j][Object.keys(response[0])[k]] + "</td>"
		}

		$cadenaCuerpo +=
			"<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' style='font-size: 80%;' data-bs-target='#Detalles'><i class='fas fa-eye'></i></button><td><button style='font-size: 80%;' type='button' class='btn btn-primary popUpdate' onclick='updateAdmin(this)' data-id='" +
			response[j][Object.keys(response[0])[0]] +
			"' ><i class='fas fa-wrench'></i></button></td><td><button style='font-size: 80%;' class='btn btn-danger' onclick=deleteAdmin(this) data-id=" +
			response[j][Object.keys(response[0])[0]] +
			"><i class='fas fa-trash-alt'></i></button></td></tr>"
	}
	

	$cuerpo.innerHTML = $cadenaCuerpo
}


function user(id) {
	fetch(URL+"user/list/"+id, {
		method: "GET",
	})
		.then((response) => {
			if (response.ok == false || response.status > 299) {
				return Promise.reject({ err: "Error, no se encontro el archivo" })
				
			}
			return response.json()
		})
		.then((response) => {
			console.log(response)
			
			display(response[0])
			if (response[1]){
				document.getElementById('pagination').classList.remove('d-none');
				paginateUser(response[1]);
			}
			else{
				document.getElementById('pagination').classList.add('d-none');
			}
		})
		.catch((err) => {
			console.error(err)
		})
}
     
function listaUsuarios (){

	   {
		document.querySelector("#tabla-admin > .cabecera").innerHTML =
			"Extrayendo Datos del servidor ..."
		 user(1)
	}

}

function paginateUser(pages){

	cadena=""
	cadena+="<li class='page-item  small'><a class='page-link' onclick=user("+1+")>First</a></li>"
	for (let i = 1; i <=pages ; i++) {
		cadena+="<li class='page-item  small'><a class='page-link' onclick=user("+i+")>"+i+"</a></li>"		
	}
	cadena+="<li class='page-item  small'><a class='page-link' onclick=user("+pages+")>Last</a></li>"

	document.getElementById("pagination").innerHTML=cadena;
}
