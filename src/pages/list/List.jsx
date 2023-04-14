import React from 'react'
import './listAll.scss'
import Sidebar from "../../components/sidebar/Sidebar"
import Navbar from "../../components/navbar/Navbar"

const List = () => {
  return (
    <div className='listAll'>
      <Sidebar />
      <div className='listContainer'>
        <Navbar />
      </div>
    </div>
  )
}

export default List;