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
}
