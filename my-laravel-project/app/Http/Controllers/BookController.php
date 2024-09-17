<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    private $books_service;

    public function __construct(BookService $books_service)
    {
        $this->books_service = $books_service;
    }

    public function store(StoreBookRequest $request)
    {
        $book = $this->books_service->createBook($request->all());
        return response()->json($book, 201);
    }
}
