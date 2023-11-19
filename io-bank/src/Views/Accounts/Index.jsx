import React, {useEffect, useState} from 'react'
import DivAdd from '../../Components/DivAdd'
import DivTable from '../../Components/DivTable'
import { Link } from 'react-router-dom'
import { confirmation, sendRequest } from "../../functions";
import storage from '../../Storage/storage';

const Accounts = () => {
  const [accounts, setAccounts] = useState([]);
  const [classLoad, setClassLoad] = useState('');
  const [classTable, setClassTable] = useState('');
  useEffect(() => {
    getClients();
  }, []);
  const getAccounts = async() => {
    const res = await sendRequest('GET', '', '/cuentas', '');
    
    setAccounts(res.message);
    setClassTable('');
    setClassLoad('d-none');
  }
  console.log(clients)
  const deleteCuenta = (id, account) => {
    console.log(id);
    confirmation(account,{body:{acceso:storage.get('authUser').rol}} , '/cuenta/borrar/' + account, '/accounts');
  }
  return (
    <div className='container-fluid'>
    <DivAdd>
      <Link to='/create' className='btn btn-dark'>
        <i className='fa-solid fa-circle-plus'></i>Add
      </Link>
    </DivAdd>
    <DivTable col="6" off="3" classLoad={classLoad} classTable={classTable}>
      <table className='table table-bordered'>
        <thead><tr><th>#</th><th>Cuenta</th><th>Tipo de cuenta</th><th>Saldo</th><th>Retirar</th><th>Consignar</th><th>Eliminar</th></tr></thead>
        <tbody className='table-group-divider'>
          {accounts.map( (row,i) => (
            <tr key={row.COD}>
              <td>{(i+1)}</td>
              <td>{row.account}</td>
              <td>{row.TIPO}</td>
              <td>{row.saldo}</td>
              <td><Link to={'/withdrawal/' + row.account} className='btn btn-warning'>
                <i className='fa.solid fa-money-bills'></i>
              </Link> 
              </td>
              <td>
               <Link to={'/consignment/' + row.account} className='btn btn-warning'>
                <i className='fa.solid fa-money-check'></i>
                </Link> 
              </td>
              <td>
                <button className='btn btn-danger' onClick={()=> deleteCuenta(row.COD,row.account)}>
                  <i className='fa-solid fa-trash'></i>
                </button>
              </td>
            </tr>
          ))
          }
        </tbody>
      </table>

    </DivTable>
  </div>
  )
}

export default Accounts