// App.js
import { useState, useEffect } from 'react';
import './App.css';
import ProductForm from './component/ProductForm';
import Home from './component/Home';
import EditProduct from './component/EditProduct';
import { Link, Routes, Route } from "react-router-dom";

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/setProduct" element={<ProductForm />} />
        <Route path="/editProduct/:id" element={<EditProduct />} /> 
      </Routes>
    </div>
  );
}

export default App;
