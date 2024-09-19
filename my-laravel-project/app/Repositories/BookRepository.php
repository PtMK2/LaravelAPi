<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    private $book_model;

    public function __construct(Book $book)
    {
        $this->book_model = $book;
    }

    /**
     * Undocumented function
     *
     * @param array $data
     * @return Book
     */
    public function create(array $data): Book
    {
        return $this->book_model->create($data);
    }
}