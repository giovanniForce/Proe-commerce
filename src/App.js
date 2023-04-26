import React, { useContext } from 'react';
import Home from './pages/home/Home';
import {
  BrowserRouter,
  Routes,
  Route,
  Navigate,
} from "react-router-dom";
import List from './pages/list/List';
import Single from './pages/single/Single';
import New from './pages/new/New';
import NewProduct from './pages/new/NewProduct';
import NewCategory from './pages/new/NewCategory';
import Register from './components/Authentification/register/Register';
import Login from './components/Authentification/login/Login';
import { AuthContext } from './components/context/AuthContext';

function App() {

const {currentUser} = useContext(AuthContext)

const RequireAuth = ({ children }) => {
  return currentUser ? children : <Navigate to={"/login"} />
}
console.log(currentUser)

  return (
    <div className="App">

      <BrowserRouter>

          <Routes>
            <Route path="/">
            <Route path="login" element={<Login />} />
             <Route index element={
             <RequireAuth>
              <Home />
             </RequireAuth>
             
             } />
             <Route path="signUp" element={<Register />} />

             <Route path="users">
                <Route index element={
                <RequireAuth>
                  <List />
                </RequireAuth>
             
                } />
                <Route path=":userId" element={
                <RequireAuth>
                  <Single />
                </RequireAuth>
             
                } />
                <Route path="new" element={
                <RequireAuth>
                  <New />
                </RequireAuth>
             
                } />
             </Route>

             <Route path="products">
                <Route index element={
                <RequireAuth>
                  <List />
                </RequireAuth>
                } />
                <Route path=":productId" element={
                <RequireAuth>
                  <Single />
                </RequireAuth>} />
                <Route path="newCategory" element={
                <RequireAuth>
                  <NewCategory />
                </RequireAuth>
                } />
                <Route path="newProduct" element={
               <RequireAuth>
                  <List />
                </RequireAuth>
                } />
             </Route>

            </Route>

          </Routes>

      </BrowserRouter>
      
    </div>
  );
}

export default App;
