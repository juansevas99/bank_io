import React, { useState } from 'react';
import { sendRequest } from '../../functions';
import DivInput from '../../Components/DivInput';
import { useNavigate, Link, useParams } from 'react-router-dom'

const Withdrawals = () => {
  const [amount, setAmount] = useState('');
  const { account } = useParams();
  const go = useNavigate();

  const handleWithdrawal = async (e) => {
    e.preventDefault();
    const form = { amount: amount, account:account };
    const res = await sendRequest('POST', form, `/api/auth/withdrawal/`, '', false);
    if (res.status === true) {
      go('/accounts');
    }
  };

  return (
    <div className='container-fluid'>
      <div className='row mt-5'>
        <div className='col-md-4 offset-md-4'>
          <div className='card border border-dark'>
            <div className='card-header bg-dark border border-dark text-white'>
              RETIRO
            </div>
            <div className='card-body'>
              <form onSubmit={handleWithdrawal}>
                <DivInput
                  type='number'
                  icon='fa-coins'
                  value={amount}
                  className='form-control'
                  placeholder='Cantidad'
                  required='required'
                  handleChange={(e) => setAmount(e.target.value)}
                />

                <DivInput
                  type='number'
                  icon='fa-credit-card'
                  value={account}
                  className='form-control'
                  placeholder='Cuenta'
                  required='required'
                  handleChange={(e) => setAccount(e.target.value)}
                  disable = {true}
                />

                <div className='d-grid col-10 mx-auto'>
                  <button className='btn btn-dark'>
                    <i className='fa-solid fa-hand-holding-usd'></i> Retirar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Withdrawals;
