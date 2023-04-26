import React from 'react'
import Sidebar from '../../components/sidebar/Sidebar'
import './new.scss'
import Navbar from '../../components/navbar/Navbar'
import axios from 'axios';
import { useState, useEffect } from 'react';

const NewCategory = () => {


  const [formData, setFormData] = useState({
    date_created: '',
    date_updated: '',
    name: '',
    description: '',
  });

  const { date_created, date_updated, name, description} = formData;

  const handleChange = e => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async e => {
    e.preventDefault();

    try {
      const config = {
        headers: {
          'Content-Type': 'application/json'
        }
      };

      const formData = new FormData();
      formData.append('date_updated', date_updated);
      formData.append('date_created', date_created);
      formData.append('name', name);
      formData.append('description', description);
   

      const res = await axios.post('http://127.0.0.1:8000/products/admin/category/', formData, config);

      console.log(res.data);
    } catch (err) {
      console.error(err.response.data);
    }
  };

  return (
    <div className='new'>
      <Sidebar />
      <div className='newContainer'>
        <Navbar />
        <div className='top'>
          <h1>add new Category</h1>
          </div>
          <div className='bottom'>

          

          <div className='right'>
            <form onSubmit={ handleSubmit }>

              <div className='formInput'>
                <label>Date created</label>
                <input name='date_created' value={date_created} type='date' placeholder='aaaa/mm/jj' onChange={handleChange}/>
              </div>
              <div className='formInput'>
                <label>Date updated</label>
                <input name='date_updated' value={date_updated} type='date' placeholder='aaaa/mm/jj' onChange={handleChange}/>
              </div>
              <div className='formInput'>
                <label>Name</label>
                <input name='name' value={name} type='text' placeholder='nom' onChange={handleChange}/>
              </div>
              <div className='formInput'>
                <label>Description</label>
                <input name='description' value={description} type='text' placeholder='description' onChange={handleChange}/>
              </div>
             
              <button type='submit'>Send</button>
            </form>
          </div>

          </div>
        
      </div>
    </div>
  )
}

export default NewCategory;