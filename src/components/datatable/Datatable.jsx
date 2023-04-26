import "./datatable.scss";
import { Link } from "react-router-dom";
import { useState, useEffect } from "react";
import axios from 'axios';


const Datatable = () => {
  const [columns, setColumns] = useState([]);
  const [records, setRecords] =useState([]);

  useEffect(() => {
    axios.get("http://127.0.0.1:8000/users/")
    .then(res => {
      console.log(Object.keys(res || {}))
      console.log(res.data)
    .catch((err) => console.log(err));
    })
  }, []);

 

  
  return (
    <div className="datatable">
      <div className="datatableTitle">
        Add New User
        <Link to="/users/new" className="link">
          Add New
        </Link>
      </div>
      <div className=''>
        <table>
          <thead>
            <tr>
              {columns.map((c, i) => (
                <th key={i}>{c}</th>
              ))}
            </tr>
          </thead>

          <tbody>
            {
              records.records?.map((d, i) => (
                <tr key={i}>
                  <td>{i.id}</td>
                  <td>{i.email}</td>
                  <td>{i.phone_number}</td>
                  <td>{i.first_name}</td>
                  <td>{i.last_name}</td>
                  <td>{i.data_joined}</td>
                  <td>{i.username}</td>

                </tr>
              ))
            }
          </tbody>
        </table>
      </div>
    </div>
  );
};

export default Datatable;