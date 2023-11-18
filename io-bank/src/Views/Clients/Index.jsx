import React, {useEffect, useState} from 'react'
import DivAdd from '../../Components/DivAdd'
import DivTable from '../../Components/DivTable'
import { Link } from 'react-router-dom'
import { confirmation, sendRequest } from "../../functions";

const Clients = () => {
  const [clients, setClients] = useState([]);
  const [classLoad, setClassLoad] = useState('');
  const [classTable, setClassTable] = useState('');
  useEffect(() => {
    getClients();
  }, []);
  const getClients = async() => {
    const res = await sendRequest('GET', '', '/asesor/reporteUsuario', '');
    
    setClients(res.message);
    setClassTable('');
    setClassLoad('d-none');
  }
  console.log(clients)
  const deleteClient = (id, name) => {
    confirmation(name, ('/api/client/' + id, '/'));
  }
  return (
    <div className='container-fluid'>
      <DivAdd>
        <Link to='create' className='btn btn-dark'>
          <i className='fa-solid fa-circle-plus'></i>Add
        </Link>
      </DivAdd>
      <DivTable col="6" off="3" classLoad={classLoad} classTable={classTable}>
        <table className='table table-bordered'>
          <thead><tr><th>#</th><th>Cedula</th><th>Nombre</th><th>Cuenta</th><th>Tipo de Cuenta</th><th>Saldo</th><th></th></tr></thead>
          <tbody className='table-group-divider'>
            {clients.map( (row,i) => (
              <tr key={row.COD}>
                <td>{(i+1)}</td>
                <td>{row.Identificacion}</td>
                <td>{row.TIPO}</td>
                <td>{row.Usuario}</td>
                <td>{row.tipo_usuario}</td>
                <td>
                 <Link to={'/edit/' + row.id} className='btn btn-warning'>
                  <i className='fa.solid fa-edit'></i>
                  </Link> 
                </td>
                <td>
                  <button className='btn btn-danger' onClick={()=> deleteClient(row.id,row.name)}>
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

export default Clients

