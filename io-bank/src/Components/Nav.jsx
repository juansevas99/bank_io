import {Link, useNavigate} from 'react-router-dom';
import storage from '../Storage/storage';

const Nav = () => {
  const go = useNavigate();
  const authUser = storage.get('authUser');
  const logout = async() => {
    storage.remove('authToken');
    storage.remove('authUser');
    await axios.get('/usuario/cerrarSession', storage.get('authToken'));
    go('/login')
  }
  if (authUser && authUser.rol === "1") {
  return (
    <nav className='navbar navbar-expand-lg navbar-white bg-dark'>
      <div className='container-fluid'>
        <a className='navbar-brand text-white'>IO Bank</a>
        <button className='navbar-toggler bg-light' type='button' data-bs-togglr='collapse' data-bs-target='#nav' aria-controls='navbarSupportedContent'>
          <span className='navbar-toggler-icon' ></span>
        </button>
      </div>
        <div className='collapse navbar-collapse' id='nav'>
          <ul className='navbar-nav mx-auto mb-2'>
            <li className='nav-item px-lg-5 h4 text-white'>
            { authUser.usuario }
            </li>
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
    </nav>
  )
  } else if(authUser && authUser.rol === "2") {
    return (
    <nav className='navbar navbar-expand-lg navbar-white bg-dark'>
      <div className='container-fluid'>
        <a className='navbar-brand text-white'>IO Bank</a>
        <button className='navbar-toggler bg-light' type='button' data-bs-togglr='collapse' data-bs-target='#nav' aria-controls='navbarSupportedContent'>
          <span className='navbar-toggler-icon' ></span>
        </button>
      </div>
    <div className='collapse navbar-collapse' id='nav'>
          <ul className='navbar-nav mx-auto mb-2'>
            <li className='nav-item px-lg-5 h4 text-white'>
            { authUser.usuario }
            </li>
            <li className='nav-item px-lg-5'>
              <Link to={`/accounts/${authUser.COD}`} className='nav-link text-white'>Cuentas</Link>
            </li>
            <li className='nav-item px-lg-5'>
              <Link to='/' className='nav-link text-white'>Cambiar Contraseña</Link>
            </li>
          </ul>
          <ul className='navbar-nav mx-auto mb-2'>
          <li className='nav-item px-lg-5'>
            <button className='btn btn-info' onClick={logout}>Logout</button>
          </li>
          </ul>
      </div>
      </nav>
    )
  } else {
    return (
      <nav className='navbar navbar-expand-lg navbar-white bg-dark'>
      <div className='container-fluid'>
      <Link to='/' className='navbar-brand text-white'>IO Bank</Link>
        <button className='navbar-toggler bg-light' type='button' data-bs-togglr='collapse' data-bs-target='#nav' aria-controls='navbarSupportedContent'>
          <span className='navbar-toggler-icon' ></span>
        </button>
      </div>
    <div className='collapse navbar-collapse' id='nav'>
          <ul className='navbar-nav mx-auto mb-2'>
            <li className='nav-item px-lg-5 h4 text-white'>
            </li>
            <li className='nav-item px-lg-5'>
              <Link to='/login' className='nav-link text-white'>Log in</Link>
            </li>
          </ul>
          <ul className='navbar-nav mx-auto mb-2'>
          <li className='nav-item px-lg-5'>
              <Link to='/register' className='nav-link text-white'>Register</Link>
            </li>
          </ul>
      </div>
      </nav>
    )
  }
}

export default Nav