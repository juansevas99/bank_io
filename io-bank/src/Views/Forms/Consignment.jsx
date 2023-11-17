import React, {useState} from 'react'
import { useNavigate, Link } from 'react-router-dom'
import {sendRequest} from '../../functions';
import DivInput from '../../Components/DivInput';

const Consignment = () => {
  const [cantidad, setCantidad] = useState('');
  const [cuenta, setCuenta] = useState('');

  const consignment = async(e) => {
    e.preventDefault();
    //await csrf();
    const form = {cantidad:cantidad, cuenta:cuenta};
    const res = await sendRequest('POST', form, '/api/auth/consignment', '', false);
    if(res.status == true){
      go('/accounts')
    }
  }
  return (
    <div className='container-fluid'>
      <div className='row mt-5'>
        <div className='col-md-4 offset-md-4'>
          <div className='card border border-dark'>
            <div className='card-header bg-dark border border-dark text-white'>
              CONSIGNMENT
            </div>
            <div className='card-body'>
              <form onSubmit={consignment}>
                <DivInput
                  type='number'
                  icon='fa-coins'
                  value={cantidad}
                  className='form-control'
                  placeholder='Cantidad'
                  required='required'
                  handleChange={(e) => setCantidad(e.target.value)}
                />

                <DivInput
                  type='number'
                  icon='fa-credit-card'
                  value={cuenta}
                  className='form-control'
                  placeholder='Cuenta'
                  required='required'
                  handleChange={(e) => setCuenta(e.target.value)}
                />

                <div className='d-grid col-10 mx-auto'>
                  <button className='btn btn-dark'>
                    <i className='fa-solid fa-hand-holding-usd'></i> Consignar
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

export default Consignment