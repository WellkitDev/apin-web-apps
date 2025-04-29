<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSubCategoryController extends Controller
{
    //
    public function index()
    {
        return view('backend.blog.sub-category.index');
    }
}
