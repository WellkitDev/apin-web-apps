<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'title',
        'slug',
        'cover',
        'pdf',
        'isbn',
        'link_isbn',
        'link_google_books',
        'halaman',
        'author',
        'description',
        'publish_date',
        'amout',
    ];
}
