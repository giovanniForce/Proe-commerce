import React from 'react'
import "./navbar.scss"
import SearchOutlinedIcon from '@mui/icons-material/SearchOutlined';
import LanguageOutlinedIcon from '@mui/icons-material/LanguageOutlined';
import NightlightRoundOutlinedIcon from '@mui/icons-material/NightlightRoundOutlined';
import ZoomInMapOutlinedIcon from '@mui/icons-material/ZoomInMapOutlined';
import NotificationsActiveOutlinedIcon from '@mui/icons-material/NotificationsActiveOutlined';
import MarkChatUnreadOutlinedIcon from '@mui/icons-material/MarkChatUnreadOutlined';
import ListOutlinedIcon from '@mui/icons-material/ListOutlined';

const Navbar = () => {
  return (
    <div className='navbar'>
        <div className='wrapper'>
            <div className='search'>
                <input type="text" placeholder='search...'/>
                <SearchOutlinedIcon className=''/>
            </div>
            <div className='items'>
              <div className='item'>
               <LanguageOutlinedIcon className='icon'/>
               English
              </div>
              <div className='item'>
               <NightlightRoundOutlinedIcon className='icon'/>
              </div>
              <div className='item'>
               <ZoomInMapOutlinedIcon className='icon'/>
              </div>
              <div className='item'>
               <NotificationsActiveOutlinedIcon className='icon'/>
               <div className='counter'>1</div>
              </div>
              <div className='item'>
               <MarkChatUnreadOutlinedIcon className='icon'/>
               <div className='counter'>2</div>
              </div>
              <div className='item'>
               <ListOutlinedIcon className='icon'/>
              </div>
              <div className='item'>
                <img src='https://images.app.goo.gl/vfYHurB8asx9vCbw7' alt='' className='avatar'/>
              </div>
            </div>
        </div>
    </div>
  )
}

export default Navbar