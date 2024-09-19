<?php

namespace App\Services;

use App\Repositories\BookRepository;

class BookService
{
    private $books_repository;

    public function __construct(BookRepository $books_repository)
    {
        $this->books_repository = $books_repository;
    }

    /**
     * 
     * Create a new book
     *
     * @param array $data
     * @return Book
     */
    public function createBook(array $data): Book
    {
        return $this->books_repository->create($data);
    }
}