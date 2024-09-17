<?php

namespace App\Services;

use App\Models\Book;
use App\Repositories\BookRepository;

class BookService
{
    private $books_repository;

    public function __construct(BookRepository $books_repository)
    {
        $this->books_repository = $books_repository;
    }

    public function createBook(array $data): void
    {
        $this->books_repository->create($data);
    }
}