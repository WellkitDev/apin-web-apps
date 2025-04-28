<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

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

    //
    public function create()
    {
        return view('backend.blog.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'is_active' => 'required',
            'order' => 'required|numeric',
        ]);

        $category = new Category();

        $category->category_name = $request->title;
        $category->category_slug = Str::slug($request->title);
        $category->category_order = $request->order;
        $category->show_on_menu = $request->is_active;

        $category->save();

        return redirect()->back()->with('success', 'Category created successfully');
    }


}
