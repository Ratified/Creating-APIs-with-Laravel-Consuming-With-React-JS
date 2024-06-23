import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';

const Books = () => {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/books')
      .then(response => response.json())
      .then(data => setProducts(data))
      .catch(error => console.log(error));
  }, []);

  return (
    <div>
      {products.map(product => {
        const { id, name, author, description, price } = product;
        return (
          <div key={id} className='product'>
            <h1 className='product__name'>
              <Link to={`/books/${id}`}>{name}</Link>
            </h1>
            <p className='product__author'>{author}</p>
            <p className='product__description'>{description}</p>
            <p className='product__price'>{price}</p>
          </div>
        );
      })}
    </div>
  );
};

export default Books;
