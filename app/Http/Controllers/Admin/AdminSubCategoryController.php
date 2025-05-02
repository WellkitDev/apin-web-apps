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

    //
    public function edit(string $slug)
    {
        $slug = rawurldecode($slug);
        $subCategory = SubCategory::where('slug_sub', $slug)->firstOrFail();
        $categories = Category::where('show_on_menu', '0')->orderBy('category_order', 'asc')->get();

        return view('backend.blog.sub-category.edit', compact('categories', 'subCategory'));
    }

    //
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'category_name' => 'required|exists:categories,id',
            'sub_title' => 'required|string',
            'order' => 'required|numeric',
            'is_active' => 'required|boolean',
        ]);


        $subCategory = SubCategory::where('slug_sub', $slug)->firstOrFail();
        $subCategory->subcategory_name = $request->sub_title;
        $subCategory->categore_id = $request->category_name;
        $subCategory->sub_order = $request->order;
        $subCategory->show_on_menu = $request->is_active;

        $newSlug = Str::slug($request->sub_title);

        if ($newSlug !== $subCategory->slug_sub) {
            $slugExists = SubCategory::where('slug_sub', $newSlug)
            ->where('id', '!=', $subCategory->id)
            ->exists();

            if ($slugExists) {
                $count = 1;
                $baseSlug = $newSlug;

                do {
                    $newSlug = $baseSlug . '-' . $count++;
                } while (SubCategory::where('slug_sub', $newSlug)->where('id', '!=', $subCategory->id)->exists());
            }

            $subCategory->slug_sub = $newSlug;
        }

        $subCategory->save();

        return redirect()->route('subcategory.index')->with('success', 'Sub Category updated successfully');

    }

    public function destroy(string $slug)
    {
        // $slug = rawurldecode($slug);
        $subCategory = SubCategory::where('slug_sub', $slug)->firstOrFail(); // Use firstOrFail for consistency

        $subCategory->delete();

        return redirect()->route('subcategory.index')->with('success', 'Sub Category delete successfully');
    }
}
