<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    //
    public function index()
    {
        // Fetch all categories from the database

        // Return the view with the categories data
        // return view('admin.categories.index', compact('categories'));
        return view('backend.blog.categories.index');
    }
}
