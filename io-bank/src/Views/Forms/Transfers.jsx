import React, {useState} from 'react'
import {sendRequest} from '../../functions';
import DivInput from '../../Components/DivInput';
import {show_alerta} from '../../functions';

const Transfers = () => {
    const [cuentaDestino, setCuentaDestino] = useState('');
  const [valor, setValor] = useState('');

  const handleTransfer = async (e) => {
    e.preventDefault();
    if (!cuentaDestino || !valor) {
      show_alerta("Por favor, completa todos los campos", 'error');
      return;
    }
    const form = {cuentaDestino:cuentaDestino, valor:valor};
    const res = await sendRequest('POST', form, '/api/auth/transfer', '', false);
    if(res.status == true){
        setCuentaDestino('');
        setValor('');
        show_alerta("Transferencia realizada con éxito", 'success');
    }
  };
  return (
    <div className='container-fluid'>
      <div className='row mt-5'>
        <div className='col-md-4 offset-md-4'>
          <div className='card border border-dark'>
            <div className='card-header bg-dark border border-dark text-white'>
              TRANSFERENCIA DE CUENTA A CUENTA
            </div>
            <div className='card-body'>
              <form onSubmit={handleTransfer}>
                <DivInput
                  type='number'
                  icon='fa-credit-card'
                  value={cuentaDestino}
                  className='form-control'
                  placeholder='Cuenta Destino'
                  required='required'
                  handleChange={(e) => setCuentaDestino(e.target.value)}
                />

                <DivInput
                  type='number'
                  icon='fa-coins'
                  value={valor}
                  className='form-control'
                  placeholder='Valor'
                  required='required'
                  handleChange={(e) => setValor(e.target.value)}
                />

                <div className='d-grid col-10 mx-auto'>
                  <button className='btn btn-dark'>
                    <i className='fa-solid fa-exchange'></i> Transferir
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

export default Transfers