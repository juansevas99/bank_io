import {Link, useNavigate} from 'react-router-dom';
import storage from '../Storage/storage';

const Nav = () => {
  const go = useNavigate();
  const logout = async() => {
    storage.remove('authToken');
    storage.remove('authUser');
    await axios.get('/usuario/cerrarSession', storage.get('authToken'));
    go('/login')
  }
  return (
    <nav className='navbar navbar-expand-lg navbar-white bg-dark'>
      <div className='container-fluid'>
        <a className='navbar-brand text-white'>IO Bank</a>
        <button className='navbar-toggler bg-light' type='button' data-bs-togglr='collapse' data-bs-target='#nav' aria-controls='navbarSupportedContent'>
          <span className='navbar-toggler-icon' ></span>
        </button>
      </div>
      { storage.get('authUser') ? (
        <div className='collapse navbar-collapse' id='nav'>
          <ul className='navbar-nav mx-auto mb-2'>
            <li className='nav-item px-lg-5 h4 text-white'>
            { storage.get('authUser').usuario }
            </li>
            if (storage.get('authUser').rol_name = "") {
              
            }
            <li className='nav-item px-lg-5'>
              <Link to='/' className='nav-link text-white'>Clients</Link>
            </li>
          </ul>
          <ul className='navbar-nav mx-auto mb-2'>
          <li className='nav-item px-lg-5'>
            <button className='btn btn-info' onClick={logout}>Logout</button>
          </li>
          </ul>
        </div>
      ): ''}
    </nav>
  )
}

export default Nav