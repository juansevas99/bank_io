import React, {useState} from 'react'
import { useNavigate, Link } from 'react-router-dom'
import {sendRequest} from '../functions';
import DivInput from '../Components/DivInput';
import storage from '../Storage/storage';

const Login = () => {
  const [username, setUsername] = useState('');
  const [password, setPassword] = useState('');
  const go = useNavigate();
  /*const csrf = async()=> {
    await axios.get('/sanctum/csrf-cookie');
  }*/
  const login = async(e) => {
    e.preventDefault();
    //await csrf();
    const form = {username:username, password:password};
    const res = await sendRequest('POST', form, '/asesor/login', '', false);
    if(res.status == true){
      storage.set('authToken', res.token);
      storage.set('authUser', res.data);
      go('/accounts');
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
                <DivInput type="username" icon='fa-address-card' value={username} className='form-control' placeholder='Id' required='required' handleChange={(e) => setUsername(e.target.value)} />
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