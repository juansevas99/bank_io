import { BrowserRouter, Routes, Route } from "react-router-dom";
import Nav from './Components/Nav';
import Accounts from './Views/Accounts/Index';
import CreateAccount from './Views/Accounts/Create';
import DeleteAccount from './Views/Accounts/Delete';
import EditAccount from './Views/Accounts/Edit';
import Clients from './Views/Clients/Index';
import CreateClient from './Views/Clients/Create';
import EditClient from './Views/Clients/Edit';
import Login from './Views/Login';
import Register from './Views/Register';
import ProtectedRoutes from './Components/ProtectedRoutes';
import Home from './Views/Home';
import Consignment from './Views/Forms/Consignment';
import NewPassword from './Views/Forms/NewPassword';
import Transfers from './Views/Forms/Transfers';
import Withdrawals from './Views/Forms/Withdrawals';

function App() {

  return (
    <BrowserRouter>
      <Nav />
      <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/login" element={<Login />} />
      <Route path="/register" element={<Register />} />
      <Route path="/consignment" element={<Consignment />} />
      <Route path="/new-password" element={<NewPassword />} />
      <Route path="/transfer" element={<Transfers />} />
      <Route path="/withdrawal" element={<Withdrawals />} />
      <Route element={<ProtectedRoutes />} >
        <Route path="/create" element={<CreateAccount />} />
        <Route path="/delete/:id" element={<DeleteAccount />} />
        <Route path="/edit/:id" element={<EditAccount />} />
        <Route path="/accounts" element={<Accounts />} />
        <Route path="/clients" element={<Clients />} />
        <Route path="/create-client" element={<CreateClient />} />
        <Route path="/edit-client/:id" element={<EditClient />} />
      </Route>
      </Routes>
    </BrowserRouter>
  )
}

export default App
