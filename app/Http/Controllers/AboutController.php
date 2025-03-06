<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function showPage($slug, $subSlug)
    {
        $page = Page::where('slug', $slug)
            ->with(['items' => function ($query) use ($subSlug) {
                $query->where('title', 'like', '%' . urldecode($subSlug) . '%');
            }])
            ->firstOrFail();

        $subItem = $page->items->first();

        return view('pages.show-sub', compact('page', 'subItem'));
    }
    
}
