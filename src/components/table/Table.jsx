import React from 'react'
import "./table.scss"
import axios from 'axios';
import { useState, useEffect } from 'react';

import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';


const List = () => { 
    
      const [data, setData] = useState([])

      
  
      useEffect(() => {
        axios.get("http://127.0.0.1:8000/products/admin/article/")
        .then((response) => setData(response.data))
        .catch((err) => console.log(err));
      }, []);
  

  return (
    <TableContainer component={Paper} className="table">
      <Table sx={{ minWidth: 650 }} aria-label="simple table">
        <TableHead>
          <TableRow>
            <TableCell className='tableCell'>Tracking ID</TableCell>
            <TableCell className='tableCell'>Product</TableCell>
            <TableCell className='tableCell'>Date d'Ajout</TableCell>
            <TableCell className='tableCell'>Description</TableCell>
            <TableCell className='tableCell'>color</TableCell>
            <TableCell className='tableCell'>Price</TableCell>
            <TableCell className='tableCell'>Status</TableCell>
         
          </TableRow>
        </TableHead>
        <TableBody>
          {
            data.data?.map(row => (
            <TableRow key={row.id}>
              <TableCell className='tableCell'>{row.id}</TableCell>
              <TableCell className='tableCell'>
                <div className='cellWrapper'>
                  <img src={row.photo} alt="" className='image' />
                </div>
              </TableCell>
              <TableCell className='tableCell'>{row.date_created}</TableCell>
              <TableCell className='tableCell'>{row.description}</TableCell>
              <TableCell className='tableCell'>{row.color}</TableCell>
              <TableCell className='tableCell'>{row.price}</TableCell>
              <TableCell className='tableCell'>
                <span className={`status ${row.active}`}>{row.status}</span>
              </TableCell>
            </TableRow>

          ))}
        </TableBody>
      </Table>
    </TableContainer>
  );
};

export default List;