import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'

const BookDetails = () => {
  const {id} = useParams();
  const [book, setBook] = useState(null);

  useEffect(() => {
    fetch(`http://127.0.0.1:8000/api/books/${id}`)
    .then(response => response.json())
    .then(data => setBook(data))
    .catch(error => console.log(error));
  }, [id])

  if (!book) {
    return <div>Loading...</div>;
  }

  const {name, author, description, price} = book;

  return (
    <div>
        <h1 className='product__name'>{name}</h1>
        <p className='product__author'>{author}</p>
        <p className="product__description">{description}</p>
        <p className='product__price'>{price}</p>
    </div>
  )
}

export default BookDetails
