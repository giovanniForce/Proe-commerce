import React from 'react'
import "./Widget.scss"
import KeyboardArrowUpOutlinedIcon from '@mui/icons-material/KeyboardArrowUpOutlined';
import PersonOutlineOutlinedIcon from '@mui/icons-material/PersonOutlineOutlined';

import ShoppingCartOutlinedIcon from '@mui/icons-material/ShoppingCartOutlined';
import LightbulbOutlinedIcon from '@mui/icons-material/LightbulbOutlined';
import AccountBalanceWalletOutlinedIcon from '@mui/icons-material/AccountBalanceWalletOutlined';

const Widget = ({ type }) => {
    let data;

    //temporary
    const amount = 100
    const diff = 20

    switch(type){
     case "user":
        data ={
         title:"USERS",
         isMoney:false,
         link: "See all users",
         icon: <PersonOutlineOutlinedIcon className='icon' 
         style={{
            color: "crimson",
            backgroundColor: "rgba(255, 0, 0, 0.2",
          }}    
         />
        };
        break;
        case "order":
        data ={
         title:"ORDERS",
         isMoney:false,
         link: "view all orders",
         icon: <ShoppingCartOutlinedIcon className='icon'
            style={{
            color: "purple",
            backgroundColor: "blue",
          }}   
         />
        };
        break;
        case "earning":
        data ={
         title:"EARNINGS",
         isMoney:true,
         link: "See net earnings",
         icon: <LightbulbOutlinedIcon className='icon'
             style={{
            color: "yellow",
            backgroundColor: "green",
          }}  
         />
        };
        break;
        case "balance":
        data ={
         title:"BALANCE",
         isMoney:true,
         link: "See details",
         icon: <AccountBalanceWalletOutlinedIcon className='icon'
             style={{
            color: "white",
            backgroundColor: "black",
          }}  
         />
        };
        break;
        default:
        break;
    }
  return (
    <div className='widget'>
        <div className='left'>
            <span className='title'>{data.title}</span>
            <span className='counter'>{data.isMoney && "£"} {amount}
            </span>
            <span className='link'>{data.link}</span>
        </div>
        <div className='right'>
        <div className='percentage positive negative'>
        <KeyboardArrowUpOutlinedIcon />
        {diff}%
        </div>
        {data.icon}
        </div>
    </div>
  );
};

export default Widget