import React, { useState } from 'react'
import Sidebar from '../../components/sidebar/Sidebar'
import './new.scss'
import Navbar from '../../components/navbar/Navbar'
import DriveFolderUploadOutlinedIcon from "@mui/icons-material/DriveFolderUploadOutlined";


const New = () => {

  const [file, setFile] = useState("")

  return (
    <div className='new'>
      <Sidebar />
      <div className='newContainer'>
        <Navbar />
        <div className='top'>
          <h1>add new User</h1>
          </div>
          <div className='bottom'>

          <div className='left'>
          <img
              src={file ? URL.createObjectURL(file):
              "https://icon-library.com/images/no-image-icon/no-image-icon-0.jpg"}
              alt=""
            />
          </div>

          <div className='right'>
            <form>

            <div className="formInput">

                <label htmlFor="file">
                  Image: <DriveFolderUploadOutlinedIcon className="icon" />
                  <input type='file' id='file' 
                  onChange={e=>setFile(e.target.files[0])} 
                  style={{ display: 'none' }}/>
                </label>

              </div>

              <div className='formInput'>
                <label>Username</label>
                <input className='' type='text' placeholder='username'/>
              </div>
              <div className='formInput'>
                <label>Name</label>
                <input className='' type='text' placeholder='name'/>
              </div>
              <div className='formInput'>
                <label>Email</label>
                <input className='' type='email' placeholder='g@gmil.com'/>
              </div>
              <div className='formInput'>
                <label>Phone</label>
                <input className='' type='text' placeholder='+23700000'/>
              </div>
              <div className='formInput'>
                <label>Address</label>
                <input className='' type='text' placeholder='makepe'/>
              </div>
              <div className='formInput'>
                <label>Password</label>
                <input className='' type='password' placeholder='xxxxxxxx'/>
              </div>
              <div className='formInput'>
                <label>Country</label>
                <input className='' type='text' placeholder='Cameroon' />
              </div>
              <button>Send</button>
            </form>
          </div>

          </div>
        
      </div>
    </div>
  )
}

export default New