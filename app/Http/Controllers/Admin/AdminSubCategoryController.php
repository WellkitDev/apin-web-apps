<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminSubCategoryController extends Controller
{
    //
    public function index()
    {
        return view('backend.blog.sub-category.index');
    }

    //
    public function create()
    {
        $categories = Category::orderBy('category_order', 'asc')->get();

        return view('backend.blog.sub-category.create', compact('categories'));
    }
}
