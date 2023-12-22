import React from "react";

import ResponsiveAppBar from "./component/Navbar";
import ColumnGroupingTable from "./component/Produk";
import DashboardHome from "./component/Home";
import ColumnGroupingTableCreate from "./component/ProdukCreate";
import ColumnGroupingTableUpdate from "./component/ProdukUpdate";

import AuthLogin from "./component/Login";

import { BrowserRouter as Router, Routes, Route } from "react-router-dom";

export default function App() {

  const token = localStorage.getItem('');

  if(token) {
    return <AuthLogin />
  }

  return(
    <Router>
      <ResponsiveAppBar />
      {/* <ColumnGroupingTable /> */}
      <Routes>
        <Route extect path="/" element={ <DashboardHome /> } />
        <Route extect path="/login" element={ <AuthLogin /> } />
        <Route extect path="/produk" element={ <ColumnGroupingTable /> } />
        <Route extect path="/produk/create" element={ <ColumnGroupingTableCreate /> } />
        <Route extect path="/update/:id" element={ <ColumnGroupingTableUpdate /> } />
      </Routes>
    </Router>
  );
    
}
