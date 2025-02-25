<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pages;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.pages.index-page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.pages.create-page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5048',
            'description' => 'nullable',
        ]);

        $page = new Pages();

        if ($request->hasFile('image')) {
            # code...
            $file = $request->file('image');
            $finalname = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/images'), $finalname);
            $page->image = '/uploads/images/' . $finalname;
        }

        $page->title = $request->title;
        $page->type = $request->type;
        $page->description = $request->description;
        $page->slug = Str::slug($request->title);
        $page->is_active = $request->is_active;
        $page->save();

        return redirect()->back()->with('success', 'Page created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
