<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    protected $book_model;

    public function __construct(Book $book)
    {
        $this->book_model = $book;
    }

    public function create(array $data): Book
    {
        return $this->book_model->create($data);
    }
}