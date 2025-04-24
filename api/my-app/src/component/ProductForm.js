import { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import './style/ProductForm.css'; 
function ProductForm() {
  const [form, setForm] = useState({
    name: '',
    product: '',
    price: ''
  });
  const navigate = useNavigate();

  const handleChange = (e) => {
    setForm({
      ...form,
      [e.target.name]: e.target.value
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    fetch('http://127.0.0.1:8000/api/products', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: JSON.stringify(form)
    })
      .then(res => res.json())
      .then(data => {
        console.log('Product Created:', data);
        navigate('/'); //redirect to home
      })
      .catch(err => console.error('Error:', err));
  };

  return (
    <div className="form-container">
      <h2 className="form-title">Create New Product</h2>
      <form onSubmit={handleSubmit} className="product-form">
        <div className="form-group">
          <label>Name:</label>
          <input
            className="form-control"
            type="text"
            name="name"
            value={form.name}
            onChange={handleChange}
            required
          />
        </div>

        <div className="form-group">
          <label>Product Description:</label>
          <input
            className="form-control"
            type="text"
            name="product"
            value={form.product}
            onChange={handleChange}
            required
          />
        </div>

        <div className="form-group">
          <label>Price:</label>
          <input
            className="form-control"
            type="text"
            name="price"
            value={form.price}
            onChange={handleChange}
            required
          />
        </div>

        <button type="submit" className="btn-submit">Submit</button>
      </form>
    </div>
  );
}

export default ProductForm;
