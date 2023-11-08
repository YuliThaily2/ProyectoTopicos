import React from "react"
import Card_C from "./Card_C"
import Menu from "./Menu"
import Login from "./Login"
import Home from "./Home"
import Crud from "./Crud"
import { Routes, Route, Navigate } from "react-router-dom"
import ListCards from "./ListCards"

function Main() {
    return(
    <Routes>
        <Route path='/petshop2/public/' element={<Menu />}>
        <Route path='/petshop2/public/' element={<Home/>}/>
            <Route path='crud' element={<Crud />} />
            <Route path='card' element={<Card_C />} />
            <Route path='listcards' element={<ListCards />} />
            <Route path='login' element={<Login />} />
            <Route path='*' element={<Navigate replace to="/" />} />
            
        </Route>
    </Routes>
    )
}

export default Main;