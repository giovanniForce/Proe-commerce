import React, { useContext, useState } from 'react'
import './login.scss'
import axios from 'axios'
import { useNavigate } from 'react-router-dom'
import {AuthContext} from "../../context/AuthContext"

const Login = () => {
    const [error, setError] = useState(false)
    const [username, setUsername] = useState('');
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');

    const navigate = useNavigate()


    const {dispatch} = useContext(AuthContext)


    const handleLogin = async (e) => {
        e.preventDefault();
        try {
          const response = await axios.post('http://127.0.0.1:8000/auth/login/', {
            email,
            username,
            password,
          });
          localStorage.setItem('token', response.data.token);
          dispatch({type:"LOGIN", payload:localStorage})
          navigate("/")
        } catch (error) {
          const errorCode = error.code;
          const errorMessage = error.message;  
          //console.error(error);
        }
      };




  return (
    <div className='login'>
        <form onSubmit={handleLogin}>
            <input type='email' placeholder='email' onChange={(e)=>setEmail(e.target.value)}/>
            <input type='password' placeholder='password' onChange={(e)=>setPassword(e.target.value)}/>
            <button type='submit'>Login</button>
            {error && <span>Wrong email or password</span>}
        </form>
    </div>
  )
}

export default Login