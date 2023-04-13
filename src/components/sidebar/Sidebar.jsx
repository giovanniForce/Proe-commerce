import React from 'react'
import "./Sidebar.scss"
import DashboardIcon from '@mui/icons-material/Dashboard';
import PersonOutlineOutlinedIcon from '@mui/icons-material/PersonOutlineOutlined';
import CategoryOutlinedIcon from '@mui/icons-material/CategoryOutlined';
import Inventory2OutlinedIcon from '@mui/icons-material/Inventory2Outlined';
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

const Sidebar = () => {
  return (
    <div className='sidebar'>
        <div className='top'> 
          <span className='logo'>PONDO Pix</span>
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
             <li>
             <PersonOutlineOutlinedIcon className='icon' />
                <span>Users</span>
             </li>

             <li>
             <CategoryOutlinedIcon className='icon' />
                <span>Category</span>
             </li>

             <li>
             <Inventory2OutlinedIcon className='icon' />
                <span>Products</span>
             </li>

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