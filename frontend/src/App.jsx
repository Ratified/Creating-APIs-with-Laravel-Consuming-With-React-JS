import React from 'react'
import Books from './components/Books'
import BookDetails from './components/BookDetails'
import { Route, Routes } from 'react-router-dom'

const App = () => {
  return (
    <Routes>
      <Route path="/" element={<Books />} />
      <Route path="/books/:id" element={<BookDetails />} />
    </Routes>
  )
}

export default App
