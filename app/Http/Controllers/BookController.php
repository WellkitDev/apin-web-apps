<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

use Illuminate\Support\Str;

class BookController extends Controller
{
    //
    public function index()
    {
        //
        $books = Book::all();
        return view('backend.book.index', compact('books'));
    }

    public function create()
    {
        return view('backend.book.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'cover' => 'required|image|mimes:png,jpg,jpeg|max:4000',
            'file_pdf' => 'required|mimes:pdf|max:4000',
            'isbn' => 'max:20|regex:/^\d{1,5}-\d{1,7}-\d{1,7}-\d{1,7}$/',
            'google' => 'string|url|max:255',
            'halaman' => 'numeric',
            'publish_date' => 'date',
            'author' => 'string|max:225',
            'description' => 'string|min:10',
        ],[
            // 'description.regex' => 'Description can only contain letters, numbers, and spaces.',
            'google.url' => 'Please enter a valid URL (e.g., https://example.com).',
            'isbn.regex' => 'The ISBN must be numbers separated by hyphens (example: 229-123-10-7664).',
            'halaman.numeric' => 'Book Pages must be numbers',
        ]);

        $fileImagePath = null;
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $finalName = 'cover_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/images'), $finalName);
            $fileImagePath = '/uploads/images/' . $finalName;
        }

        $filePdfPath = null;
        if ($request->hasFile('file_pdf')) {
            $file = $request->file('file_pdf');
            $finalName = 'file_pdf_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/files'), $finalName);
            $filePdfPath = '/uploads/files/' . $finalName;
        }

        $buku = new Book();
        $buku->title = $request->title;
        $buku->slug = Str::slug($request->title);
        $buku->cover = $fileImagePath;
        $buku->pdf = $filePdfPath;
        $buku->isbn = $request->isbn;
        $buku->link_google_books = $request->google;
        $buku->halaman = $request->halaman;
        $buku->publish_date = $request->publish_date;
        $buku->author = $request->author;
        $buku->description = $request->description;

        $buku->save();

        return redirect()->back()->with('success', 'Book added successfully');
    }

    public function update(Request $request, $books)
    {
        $book = Book::where('slug', $books)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'cover' => 'nullable|image|mimes:png,jpg,jpeg|max:4000',
            'file_pdf' => 'nullable|mimes:pdf|max:4000',
            'isbn' => 'max:20|regex:/^\d{1,5}-\d{1,7}-\d{1,7}-\d{1,7}$/',
            'google' => 'string|url|max:255',
            'halaman' => 'numeric',
            'publish_date' => 'date',
            'author' => 'string|max:225',
            'description' => 'string|min:10',
        ],[
            // 'description.regex' => 'Description can only contain letters, numbers, and spaces.',
            'google.url' => 'Please enter a valid URL (e.g., https://example.com).',
            'isbn.regex' => 'The ISBN must be numbers separated by hyphens (example: 229-123-10-7664).',
            'halaman.numeric' => 'Book Pages must be numbers',
        ]);

        $fileImagePath = null;
        if ($request->hasFile('cover')) {
            if ($book->cover && file_exists(public_path($book->cover))) {
                unlink(public_path($book->cover));
            }
            $file = $request->file('cover');
            $finalName = 'cover_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/images'), $finalName);
            $fileImagePath = '/uploads/images/' . $finalName;
            $book->cover = $fileImagePath;
        } else {
            $book->cover = $book->cover;
        }


        $filePdfPath = null;
        if ($request->hasFile('file_pdf')) {
            if ($book->pdf && file_exists(public_path($book->pdf))) {
                unlink(public_path($book->pdf));
            }
            $file = $request->file('file_pdf');
            $finalName = 'file_pdf_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/files'), $finalName);
            $filePdfPath = '/uploads/files/' . $finalName;
            $book->pdf = $filePdfPath;
        }else {
            $book->pdf = $book->pdf;
        }


        $newSlug = Str::slug($request->title);
        if ($newSlug !== $book->slug) {
            $slugExists = Book::where('slug', $newSlug)->where('id', '!=', $book->id)->exists();

            if ($slugExists) {
                $count = 1;
                $baseSlug = $newSlug;
                do {
                    $newSlug = $baseSlug . '-' . $count++;
                } while (Book::where('slug', $newSlug)->where('id', '!=', $book->id)->exists());
            }
            $book->slug = $newSlug;
        }

        $book->title = $request->title;


        $book->isbn = $request->isbn;
        $book->link_google_books = $request->google;
        $book->halaman = $request->halaman;
        $book->publish_date = $request->publish_date;
        $book->author = $request->author;
        $book->description = $request->description;

        $book->save();
        return redirect()->back()->with('success', 'Book updated successfully');
    }

    public function destroy($books)
    {
        $book = Book::where('slug', $books)->firstOrFail();
        //new metod delete
        foreach (['cover', 'pdf'] as $file) {
            if ($book->$file && file_exists(public_path($book->$file))) {
                unlink(public_path($book->$file));
            }
        }
        // if ($book->cover && file_exists(public_path($book->cover))) {
        //     unlink(public_path($book->cover));
        // }

        // if ($book->pdf && file_exists(public_path($book->pdf))) {
        //     unlink(public_path($book->pdf));
        // }

        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');

    }
}
