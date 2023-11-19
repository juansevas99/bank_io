import React, {useState} from 'react'
import {sendRequest} from '../../functions';
import DivInput from '../../Components/DivInput';
import {show_alerta} from '../../functions';
import storage from '../../Storage/storage';


const NewPassword = () => {
  const authUser = storage.get('authUser');
    const [password, setPassword] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');

  const  handleChangePassword = async(e) => {
    e.preventDefault();
    if (password !== confirmPassword) {
      show_alerta("Las contraseñas no coinciden", 'error');
      return;
    }
    const form = {body:{id:authUser.COD,password:password}};
    const res = await sendRequest('POST', form, `/api/auth/newpassword`, '', false);
    if(res.status == true){
        setPassword('');
        setConfirmPassword('');
        show_alerta("Contraseña cambiada con éxito", 'success');
    }
    
  };
  return (
    <div className='container-fluid'>
    <div className='row mt-5'>
      <div className='col-md-4 offset-md-4'>
        <div className='card border border-dark'>
          <div className='card-header bg-dark border border-dark text-white'>
            CHANGE PASSWORD
          </div>
          <div className='card-body'>
            <form onSubmit={handleChangePassword}>
              <DivInput
                type='password'
                icon='fa-lock'
                value={password}
                className='form-control'
                placeholder='Nueva Contraseña'
                required='required'
                handleChange={(e) => setPassword(e.target.value)}
              />

              <DivInput
                type='password'
                icon='fa-lock'
                value={confirmPassword}
                className='form-control'
                placeholder='Confirmar Contraseña'
                required='required'
                handleChange={(e) => setConfirmPassword(e.target.value)}
              />

              <div className='d-grid col-10 mx-auto'>
                <button className='btn btn-dark'>
                  <i className='fa-solid fa-key'></i> Cambiar Contraseña
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  )
}

export default NewPassword