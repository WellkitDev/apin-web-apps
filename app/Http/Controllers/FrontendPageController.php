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

    public function bookDetail($slug)
    {
        $titles = Book::where('slug', $slug)->firstOrFail();
        return view('book.details', compact('titles'));
    }
}
