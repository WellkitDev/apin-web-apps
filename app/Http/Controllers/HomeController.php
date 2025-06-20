<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Article;
use App\Models\PageItem;

class HomeController extends Controller
{
    //
    public function index()
    {
        $aboutPage = Page::where('type', 'About')
            ->where('is_active', true)
            ->first();

        $servicesPage = Page::where('slug', 'layanan')
            ->where('is_active', true)
            ->with(['pageItems' => function ($query) {
                $query->where('is_active', true)
                      ->orderBy('sort_order', 'asc');
            }])
            ->first();

        $services = null;
        if (!$servicesPage) {
            $services = PageItem::where('type', 'Layanan')
                ->where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->get();
        }

        $article_data = Article::with('subCategory')->orderBy('id', 'desc')->paginate(3);

        return view('beranda.index', compact('aboutPage', 'servicesPage', 'services', 'article_data'));
    }
}
