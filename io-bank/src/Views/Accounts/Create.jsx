import React, {useState} from 'react'
import { useNavigate, Link } from 'react-router-dom'
import {sendRequest} from '../../functions';
import storage from '../../Storage/storage';

function Create() {
  const go = useNavigate();
  const [accountType, setAccountType] = useState('');
  const createAccount = async(e) => {
    e.preventDefault();
    //await csrf();
    const form = {body:{accountType:accountType, id:storage.get('authUser').COD, saldo:0}};
    const res = await sendRequest('POST', form, '/crear/cuenta', '', false);
    console.log(res)
    if(res.code = 1){
      go('/accounts')
    }
  }
  return (
    <div className='container-fluid'>
      <div className='row mt-5'>
        <div className='col-md-4 offset-md-4'>
          <div className='card border border-dark'>
            <div className='card-header bg-dark border border-dark text-white'>
              Create account
            </div>
            <div className='card-body'>
            <form onSubmit={createAccount}>
            <div className='mb-3'>
              <label htmlFor='documentType' className='form-label'>
                Tipo de cuenta
              </label>
              <select
                className='form-select'
                id='accountType'
                value={accountType}
                onChange={(e) => setAccountType(e.target.value)}
                required
              >
              <option value='' disabled>
                Seleccione el tipo de cuenta
                </option>
                <option value="1">Cuenta Ahorros</option>
                <option value="2">Cuenta corriente</option>
              </select>
            </div>
            <div className='d-grid col-10 mx-auto'>
              <button className='btn btn-dark'>
                <i className='fa-solid fa-plus'></i> Create
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

export default Create