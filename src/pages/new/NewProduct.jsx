import React from 'react'
import Sidebar from '../../components/sidebar/Sidebar'
import './new.scss'
import Navbar from '../../components/navbar/Navbar'
import DriveFolderUploadOutlinedIcon from "@mui/icons-material/DriveFolderUploadOutlined";
import axios from 'axios';
import { useState, useEffect } from 'react';

const New = () => {

  const [file, setFile] = useState(null);

  const [formData, setFormData] = useState({
    date_created: '',
    date_updated: '',
    name: '',
    description: '',
    color: '',
    price: '',
    photo: null,
    product: '',
    qte: ''
  });

  const { date_created, date_updated, name, description, color, price, photo, product, qte} = formData;

  const handleChange = e => {
    if (e.target.name === 'photo') {
      setFile(e.target.files[0]);
      setFormData({ ...formData, photo: e.target.files[0].name });
    } else {
      setFormData({ ...formData, [e.target.name]: e.target.value });
    }
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
      formData.append('color', color);
      formData.append('price', price);
      formData.append('qte', qte);
      formData.append('product', product);
      formData.append('photo', file);

      const res = await axios.post('http://127.0.0.1:8000/products/admin/article/', formData, config);

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
          <h1>add new Product</h1>
          </div>
          <div className='bottom'>

          <div className='left'>
          <img
              src={
              file 
              ? URL.createObjectURL(file):
              "https://icon-library.com/images/no-image-icon/no-image-icon-0.jpg"}
              alt=""
            />
          </div>

          <div className='right'>
            <form onSubmit={handleSubmit}>

            <div className="formInput">
                <label htmlFor="file">
                  Image: <DriveFolderUploadOutlinedIcon className="icon" />
                  <input name='photo' type='file' id='file' style={{ display: 'none' }} value={null} onChange={handleChange}/>
                </label>
              </div>

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
              <div className='formInput'>
                <label>Quantity</label>
                <input name='qte' value={qte} type='number' placeholder='nombre' onChange={handleChange}/>
              </div>
              <div className='formInput'>
                <label>Color</label>
                <input name='color' value={color} type='text' placeholder='couleur' onChange={handleChange}/>
              </div>
              <div className='formInput'>
                <label>Price</label>
                <input name='price' value={price} type='number' placeholder='FCFA' onChange={handleChange}/>
              </div>
              <div className='formInput'>
                <label>Product</label>
                <input name='product' value={product} type='text' placeholder='produit' onChange={handleChange}/>
              </div>
              <button type='submit'>Send</button>
            </form>
          </div>

          </div>
        
      </div>
    </div>
  )
}

export default New