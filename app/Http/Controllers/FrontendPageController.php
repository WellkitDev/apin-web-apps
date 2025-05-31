<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    //
    public function pageBook()
    {
        $books = Book::all();
        return view('book.show', compact('books'));
    }
}
