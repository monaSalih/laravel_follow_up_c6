import { useState, useEffect } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import './style/Home.css'; 
function Home() {
  const [products, setProducts] = useState([]);
  const navigate = useNavigate();

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/products')
      .then((res) => res.json())
      .then((data) => {
        setProducts(data.data);
      });
  }, []);

  const handleEdit = (id) => {
    navigate(`/editProduct/${id}`);
  };

  const handleDelete = (id) => {
    if (window.confirm("Are you sure you want to delete this product?")) {
      fetch(`http://127.0.0.1:8000/api/products/${id}`, {
        method: "DELETE",
        headers: {
          "Content-Type": "application/json"
        }
      })
        .then((res) => {
          if (res.ok) {
            setProducts(products.filter(product => product.pro_id !== id));
          } else {
            alert("Failed to delete product.");
          }
        })
        .catch(error => {
          console.error("Delete error:", error);
        });
    }
  };

  return (
    <div className="container">
      <h1 className="title">Product List</h1>
      <div className="action-bar">
        <Link to="/setProduct" className="btn btn-success">+ Create Product</Link>
      </div>

      <table className="table table-bordered">
        <thead className="thead-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Product</th>
            <th>Price</th>
            <th colSpan={2}>Actions</th>
          </tr>
        </thead>
        <tbody>
          {products?.map((item) => (
            <tr key={item.pro_id}>
              <td>{item.pro_id}</td>
              <td>{item.name}</td>
              <td>{item.rpro_description}</td>
              <td>{item.price}</td>
              <td>
                <button className="btn btn-primary" onClick={() => handleEdit(item.pro_id)}>Edit</button>
              </td>
              <td>
                <button className="btn btn-danger" onClick={() => handleDelete(item.pro_id)}>Delete</button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default Home;
