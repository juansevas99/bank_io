import React, {useState} from 'react'
import { useNavigate, Link } from 'react-router-dom'
import {sendRequest} from '../functions';
import DivInput from '../Components/DivInput';

const Register = () => {
  const [identification, setIdentification] = useState('');
  const [documentType, setDocumentType] = useState('');
  const [name, setName] = useState('');
  const [userType, setUserType] = useState('');
  const [password, setPassword] = useState('');
  const [email, setEmail] = useState('');
  const go = useNavigate();
  /*const csrf = async()=> {
    await axios.get('/sanctum/csrf-cookie');
  }*/
  const register = async(e) => {
    e.preventDefault();
    //await csrf();
    const form = {body:{documento_usuario:identification, tipo_documento_usuario:documentType, nombre_usuario:name, tipo_usuario_id_tipo_usuario:userType, password:password, email:email, usuario_rol_id: 2}};
    const res = await sendRequest('POST', form, '/usuario/actualizar', '', false);
    console.log(res)
    if(res.code = 1){
      go('/login')
    }
  }
  return (
    <div className='container-fluid'>
      <div className='row mt-5'>
        <div className='col-md-4 offset-md-4'>
          <div className='card border border-dark'>
            <div className='card-header bg-dark border border-dark text-white'>
              REGISTER
            </div>
            <div className='card-body'>
              <form onSubmit={register}>
                <DivInput
                  type='text'
                  icon='fa-address-card'
                  value={identification}
                  className='form-control'
                  placeholder='Identification'
                  required='required'
                  handleChange={(e) => setIdentification(e.target.value)}
                />

                <div className='mb-3'>
                  <label htmlFor='documentType' className='form-label'>
                    Tipo de Documento
                  </label>
                  <select
                    className='form-select'
                    id='documentType'
                    value={documentType}
                    onChange={(e) => setDocumentType(e.target.value)}
                    required
                  >
                    <option value='' disabled>
                      Seleccione el tipo de documento
                    </option>
                    <option value="1">CC</option>
                    <option value="2">Pasaporte</option>
                  </select>
                </div>

                <DivInput
                  type='text'
                  icon='fa-user'
                  value={name}
                  className='form-control'
                  placeholder='Nombre'
                  required='required'
                  handleChange={(e) => setName(e.target.value)}
                />
                <DivInput
                  type='email'
                  icon='fa-user'
                  value={email}
                  className='form-control'
                  placeholder='Email'
                  required='required'
                  handleChange={(e) => setEmail(e.target.value)}
                />

                <div className='mb-3'>
                  <label htmlFor='userType' className='form-label'>
                    Tipo de Usuario
                  </label>
                  <select
                    className='form-select'
                    id='userType'
                    value={userType}
                    onChange={(e) => setUserType(e.target.value)}
                    required
                  >
                    <option value='' disabled>
                      Seleccione el tipo de usuario
                    </option>
                    <option value="1">Persona Natural</option>
                    <option value='2'>Persona Jurídica</option>
                  </select>
                </div>
                
                <label htmlFor='documentType' className='form-label'>
                    Password
                  </label>
                  <DivInput type="password" icon='fa-key' value={password} className='form-control' placeholder='Password' required='required' handleChange={(e) => setPassword(e.target.value)} />

                <div className='d-grid col-10 mx-auto'>
                  <button className='btn btn-dark'>
                    <i className='fa-solid fa-user-plus'></i> Register
                  </button>
                </div>
              </form>
              <Link to='/login'>
                <i className='fa-solid fa-door-open'></i> Login
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}

export default Register