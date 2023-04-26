import React from 'react'
import "./Sidebar.scss"
import DashboardIcon from '@mui/icons-material/Dashboard';
import CategoryOutlinedIcon from '@mui/icons-material/CategoryOutlined';
import TurnedInNotOutlinedIcon from '@mui/icons-material/TurnedInNotOutlined';
import ViewModuleOutlinedIcon from '@mui/icons-material/ViewModuleOutlined';
import LocalShippingOutlinedIcon from '@mui/icons-material/LocalShippingOutlined';
import EqualizerOutlinedIcon from '@mui/icons-material/EqualizerOutlined';
import NotificationsActiveOutlinedIcon from '@mui/icons-material/NotificationsActiveOutlined';
import HealthAndSafetyOutlinedIcon from '@mui/icons-material/HealthAndSafetyOutlined';
import VpnKeyOutlinedIcon from '@mui/icons-material/VpnKeyOutlined';
import SettingsOutlinedIcon from '@mui/icons-material/SettingsOutlined';
import SentimentSatisfiedAltOutlinedIcon from '@mui/icons-material/SentimentSatisfiedAltOutlined';
import LogoutOutlinedIcon from '@mui/icons-material/LogoutOutlined';
import { Link } from 'react-router-dom';
import PersonOutlineIcon from "@mui/icons-material/PersonOutline";
import StoreIcon from "@mui/icons-material/Store";





const Sidebar = () => {
  return (
    <div className='sidebar'>
        <div className='top'> 
        <Link to="/" style={{ textDecoration: "none" }}>
          <span className="logo">Ecommerce</span>
        </Link>
        </div>
        <hr /> 
        <div className='center'> 
           <ul>
           <p className='title'>MAIN</p>
             <li>
                <DashboardIcon className='icon' />
                <span>Dashboard</span>
             </li>
              <p className='title'>LISTS</p>
              <Link to="/users" style={{ textDecoration: "none" }}>
            <li>
              <PersonOutlineIcon className="icon" />
              <span>Users</span>
            </li>
          </Link>

             <li>
             <CategoryOutlinedIcon className='icon' />
                <span>Category</span>
             </li>

             <Link to="/products" style={{ textDecoration: "none" }}>
            <li>
              <StoreIcon className="icon" />
              <span>Products</span>
            </li>
          </Link>

             <li>
             <TurnedInNotOutlinedIcon className='icon' />
                <span>Item</span>
             </li>

             <li>
             <ViewModuleOutlinedIcon className='icon' />
                <span>Orders</span>
             </li>

             <li>
             <LocalShippingOutlinedIcon className='icon' />
                <span>Delivery</span>
             </li>
             <p className='title'>USEFUL</p>
             <li>
             <EqualizerOutlinedIcon className='icon' />
                <span>Stats</span>
             </li>

             <li>
             <NotificationsActiveOutlinedIcon className='icon' />
                <span>Notifications</span>
             </li>
             <p className='title'>SERVICES</p>
             <li>
             <HealthAndSafetyOutlinedIcon className='icon' />
                <span>System Health</span>
             </li>

             <li>
             <VpnKeyOutlinedIcon className='icon' />
                <span>Logs</span>
             </li>

             <li>
             <SettingsOutlinedIcon className='icon' />
                <span>Setting</span>
             </li>
             <p className='title'>USER</p>
             <li>
             <SentimentSatisfiedAltOutlinedIcon className='icon' />
                <span>Profile</span>
             </li>

             <li>
             <LogoutOutlinedIcon className='icon' />
                <span>Logout</span>
             </li>
           </ul>
        </div>
        <div className='bottom'> 
        <div className='colorOption'></div>
        <div className='colorOption'></div>
        </div>
    </div>
  )
}

export default Sidebar