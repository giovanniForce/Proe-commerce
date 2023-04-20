import React from 'react'
import Sidebar from '../../components/sidebar/Sidebar'
import './new.scss'
import Navbar from '../../components/navbar/Navbar'

const New = () => {
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
              src= "https://icon-library.com/images/no-image-icon/no-image-icon-0.jpg"
              alt=""
            />
          </div>

          <div className='right'>
            <form>
              <div className='formInput'>
                <label>Username</label>
                <input className='' type='text' placeholder='username'></input>
              </div>
              <div className='formInput'>
                <label>Name</label>
                <input className='' type='text' placeholder='name'></input>
              </div>
              <div className='formInput'>
                <label>Email</label>
                <input className='' type='email' placeholder='g@gmil.com'></input>
              </div>
              <div className='formInput'>
                <label>Phone</label>
                <input className='' type='text' placeholder='+23700000'></input>
              </div>
              <div className='formInput'>
                <label>Address</label>
                <input className='' type='text' placeholder='makepe'></input>
              </div>
              <div className='formInput'>
                <label>Password</label>
                <input className='' type='password' placeholder='xxxxxxxx'></input>
              </div>
              <div className='formInput'>
                <label>Country</label>
                <input className='' type='text' placeholder='xxxxxxxx'></input>
              </div>
            </form>
          </div>

          </div>
        
      </div>
    </div>
  )
}

export default New