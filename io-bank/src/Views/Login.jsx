import React, {useState} from 'react'
import { useNavigate, Link } from 'react-router-dom'
import {sendRequest} from '../functions';
import DivInput from '../Components/DivInput';
import storage from '../Storage/storage';

const Login = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const go = useNavigate();
  /*const csrf = async()=> {
    await axios.get('/sanctum/csrf-cookie');
  }*/
  const login = async(e) => {
    e.preventDefault();
    //await csrf();
    const form = {body:{email:email, password:password}};
    const res = await sendRequest('POST', form, '/usuario/login', '', false);
    console.log(res)
    if(res.code = 1){
      if(res.message[0].rol = "2"){
        storage.set('authToken', res.message[0].token);
        storage.set('authUser', res.message[0]);
        go('/clients');
      }
      if(res.message[0].rol = "2") {
        storage.set('authToken', res.message[0].token);
        storage.set('authUser', res.message[0]);
        go('/accounts');
      }
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
              <form onSubmit={login}>
                <DivInput type="email" icon='fa-address-card' value={email} className='form-control' placeholder='Id' required='required' handleChange={(e) => setEmail(e.target.value)} />
                <DivInput type="password" icon='fa-key' value={password} className='form-control' placeholder='Password' required='required' handleChange={(e) => setPassword(e.target.value)} />
                <div className='d-grid col-10 mx-auto'>
                  <button className='btn btn-dark'>
                    <i className='fa-solid fa-door-open'></i>Login
                  </button>
                </div>
              </form>
              <Link to='/register'>
                <i className='fa-solid fa-user-plus'></i>Register
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}

export default Login