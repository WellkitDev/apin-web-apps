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
        $categories = Category::orderBy('category_order', 'asc')->get();
        // Return the view with the categories data
        // return view('admin.categories.index', compact('categories'));
        return view('backend.blog.categories.index', compact('categories'));
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

    //
    public function edit(string $slug)
    {
        $slug = rawurldecode($slug);
        $categories = Category::where('category_slug', $slug)->firstOrFail(); // Use firstOrFail for consistency

        return view('backend.blog.categories.edit', compact('categories'));
    }

    //
    public function update(Request $request, string $slug)
    {

        $request->validate([
            'title' => 'required|string|max:50',
            'is_active' => 'required',
            'order' => 'required|numeric',
        ]);

        $slug = rawurldecode($slug);
        $categories = Category::where('category_slug', $slug)->firstOrFail();

        $categories->category_name = $request->title;
        $categories->category_order = $request->order;
        $categories->show_on_menu = $request->is_active;

        $newSlug = Str::slug($request->title);

        if ($newSlug !== $categories->category_slug) {
            $slugExists = Category::where('category_slug', $newSlug)
            ->where('id', '!=', $categories->id)
            ->exists();

            if ($slugExists) {
                $count = 1;
                $baseSlug = $newSlug;

                do {
                    $newSlug = $baseSlug . '-' . $count++;
                } while (Category::where('category_slug', $newSlug)->where('id', '!=', $categories->id)->exists());
            }

            $categories->category_slug = $newSlug;
        }

        $categories->save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    //
    public function destroy(string $slug)
    {
        $slug = rawurldecode($slug);
        $categories = Category::where('category_slug', $slug)->firstOrFail(); // Use firstOrFail for consistency

        $categories->delete();

        return redirect()->route('category.index')->with('success', 'Category delete successfully');

    }


}
