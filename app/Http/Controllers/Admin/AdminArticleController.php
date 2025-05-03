<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Tag;
use Illuminate\Support\Str;

class AdminArticleController extends Controller
{
    //
    public function index()
    {
        //
        return view('backend.blog.artikel.index');
    }

    //
    public function create()
    {
        //
        return view('backend.blog.artikel.create');
    }

    //
    public function store()
    {
        //
        return redirect()->back()->with('success', 'Article added Successfully');
    }

    //
    public function edit()
    {
        //
        return view('backend.blog.artikel.edit');
    }

    //
    public function update()
    {
        //
        return redirect()->back()->with('success', 'Article updated Successfully');
    }


}
