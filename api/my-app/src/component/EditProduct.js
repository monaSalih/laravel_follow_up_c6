import { useEffect, useState } from "react";
import { useParams, useNavigate } from "react-router-dom";
import './style/EditProduct.css'; // Create and import this for custom styles

function EditProduct() {
  const { id } = useParams(); // Get product ID from URL
  const navigate = useNavigate();

  const [formData, setFormData] = useState({
    name: "",
    product: "",
    price: ""
  });

  // Fetch the product data when the component mounts
  useEffect(() => {
    fetch(`http://127.0.0.1:8000/api/products/${id}`)
      .then((res) => res.json())
      .then((data) => {
        setFormData({
          name: data.name,
          product: data.product || data.rpro_description || "", // fallback if product is named differently
          price: data.price
        });
      });
  }, [id]);

  // Handle input changes
  const handleChange = (e) => {
    setFormData(prev => ({
      ...prev,
      [e.target.name]: e.target.value
    }));
  };

  // Handle form submission
  const handleSubmit = (e) => {
    e.preventDefault();
    fetch(`http://127.0.0.1:8000/api/products/${id}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(formData)
    })
      .then((res) => res.json())
      .then(() => {
        alert("Product updated successfully!");
        navigate("/"); // Go back to homepage
      });
  };

  return (
    <div className="form-container">
      <h2 className="form-title">Edit Product</h2>
      <form onSubmit={handleSubmit} className="product-form">
        <div className="form-group">
          <label>Name:</label>
          <input
            className="form-control"
            type="text"
            name="name"
            value={formData.name}
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
            value={formData.product}
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
            value={formData.price}
            onChange={handleChange}
            required
          />
        </div>

        <button type="submit" className="btn-submit">Update Product</button>
      </form>
    </div>
  );
}

export default EditProduct;
