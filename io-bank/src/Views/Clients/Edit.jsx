import React, { useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom';
import { sendRequest } from '../../functions';
import DivInput from '../../Components/DivInput';

const Edit = ({userId}) => {
  const [userData, setUserData] = useState({
    identification: '',
    documentType: '',
    name: '',
    userType: '',
    password: '',
    accountNumber: '',
  });
  const [loading, setLoading] = useState(true);
  const go = useNavigate();
  useEffect(() => {
    const fetchUserData = async () => {

        const res = await sendRequest('GET', '', `/api/users/${userId}`, '');
        setUserData({
          identification: res.identification,
          documentType: res.documentType,
          name: res.name,
          userType: res.userType,
          password: '',
          accountNumber: res.accountNumber,
        });
        setLoading(false);
    };

    fetchUserData();
  }, [userId]);
  const updateUser = async (e) => {
    e.preventDefault();
    const res = await sendRequest('POST', userData, '/api/auth/register', '', false);
    if(res.status == true){
      go('/login')
    }
  };
  return (
    <div className='container-fluid'>
      <div className='row mt-5'>
        <div className='col-md-4 offset-md-4'>
          <div className='card border border-dark'>
            <div className='card-header bg-dark border border-dark text-white'>
              REGISTER
            </div>
            <div className='card-body'>
              <form onSubmit={updateUser}>
                <DivInput
                  type='text'
                  icon='fa-address-card'
                  value={userData.identification}
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
                    value={userData.documentType}
                    onChange={(e) => setDocumentType(e.target.value)}
                    required
                  >
                    <option value='' disabled>
                      Seleccione el tipo de documento
                    </option>
                    <option value='cc'>CC</option>
                    <option value='pasaporte'>Pasaporte</option>
                  </select>
                </div>

                <DivInput
                  type='text'
                  icon='fa-user'
                  value={userData.name}
                  className='form-control'
                  placeholder='Nombre'
                  required='required'
                  handleChange={(e) => setName(e.target.value)}
                />

                <div className='mb-3'>
                  <label htmlFor='userType' className='form-label'>
                    Tipo de Usuario
                  </label>
                  <select
                    className='form-select'
                    id='userType'
                    value={userData.userType}
                    onChange={(e) => setUserType(e.target.value)}
                    required
                  >
                    <option value='' disabled>
                      Seleccione el tipo de usuario
                    </option>
                    <option value='natural'>Persona Natural</option>
                    <option value='juridica'>Persona Jurídica</option>
                  </select>
                </div>
                <div className='d-grid col-10 mx-auto'>
                  <button className='btn btn-dark'>
                    <i className='fa-solid fa-user-plus'></i> Editar
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

export default Edit