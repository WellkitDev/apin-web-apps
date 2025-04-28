<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class BlogArticleController extends Controller
{
    //
    public function index()
    {
        // Fetch all category from the database
        $categories = Category::orderBy('category_order', 'asc')->get();

        return view('blog.artikel', compact('categories'));
    }
}
