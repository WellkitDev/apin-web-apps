<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;


class AdminSubCategoryController extends Controller
{
    //
    public function index()
    {
        $subCategory = SubCategory::with('category')->orderBy('sub_order', 'asc')->get();
        return view('backend.blog.sub-category.index', compact('subCategory'));
    }

    //
    public function create()
    {
        $categories = Category::where('show_on_menu', '0')->orderBy('category_order', 'asc')->get();

        return view('backend.blog.sub-category.create', compact('categories'));
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|exists:categories,id',
            'sub_title' => 'required|string',
            'order' => 'required|numeric',
            'is_active' => 'required|boolean',
        ]);

        $subCategory = new SubCategory();
        $subCategory->subcategory_name = $request->sub_title;
        $subCategory->categore_id = $request->category_name;
        $subCategory->sub_order = $request->order;
        $subCategory->show_on_menu = $request->is_active;

        $subCategory->slug_sub = Str::slug($request->sub_title);

        $subCategory->save();

        return redirect()->back()->with('success', 'Sub category created successfully');
    }
}
