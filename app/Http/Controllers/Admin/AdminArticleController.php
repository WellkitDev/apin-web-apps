<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Str;

use DOMDocument;
use Illuminate\Support\Facades\DB;

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
        $subCategories = SubCategory::with('category')->get();
        $tags = Tag::all();
        return view('backend.blog.artikel.create', compact('subCategories', 'tags'));
    }

    //
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:100',
            'data_images' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'article_category' => 'required',
            'is_share' => 'required',
            'article_tags' => 'required',
            'is_comment' => 'required',
            'description' => 'required',
        ]);

        $showPost = DB::select("SHOW TABLE STATUS LIKE 'articles'");
        $article_id = $showPost[0]->Auto_increment;

        // Simpan gambar utama (jika ada)
        if ($request->hasFile('data_images')) {
                $file = $request->file('data_images');
                $finalname = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension(); // Tambah uniqid untuk unik
                $file->move(public_path('uploads/data_images'), $finalname); // Pakai folder data_imagess
                $request->data_images = '/uploads/data_images/' . $finalname;
        }

        //proses keyword atau tag array
        if ($request->article_tags != '') {
            $tags_array_new = [];
            $tags_array = explode(',', $request->article_tags);

            for ($i=0; $i < count($tags_array); $i++) {
                # code...
                $tags_array_new[] = trim($tags_array[$i]);
            }

            $tags_array_new = array_values(array_unique($tags_array_new));

            for ($i=0; $i < count($tags_array_new); $i++) {
                $tag = new Tag();
                $tag->article_id = $article_id;
                $tag->tag_name = trim($tags_array_new[$i]);
                $tag->save();
            }
        }

        // 'subcategory_id',
        // 'article_title',
        // 'article_img',
        // 'article_detail',
        // 'visitors',
        // 'author_id',
        // 'meta_share',
        // 'meta_comment',
        $articles = new Article();
        $articles->subcategory_id = $request->article_category;
        $articles->article_title = $request->title;
        $articles->slug = Str::slug($request->title);
        $articles->article_img = $request->data_images;
        $articles->visitors = 1;
        $articles->author_id = 0;
        $articles->meta_share = $request->is_share;
        $articles->meta_comment = $request->is_comment;


        $description = $request->description;

        if ($description) {
            $dom = new \DOMDocument();

            @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');

            foreach ($images as $key => $img) {
                $src = $img->getAttribute('src');

                //cek apakah gambar adalah base64
                if (strpos($src, 'data:image/') === 0) {
                    $dataParts = explode(',', $src);

                    if (count($dataParts) == 2) {
                        $base64Data = $dataParts[1];
                        $imageData = base64_decode($base64Data);

                        if ($imageData !== false) {
                            //tentukan tipe gambar dari header base64
                            $mimeType = explode(';', explode(':', $dataParts[0])[1])[0];
                            $extension = str_replace('image/', '', $mimeType);

                            //buat nama file unique
                            $imageName = '/uploads/images/' . time() . '_' . uniqid() . '_' . $key . '.' . $extension;
                            $imagePath = public_path($imageName);

                            //simpan gambar ke folder public/upload.images
                            file_put_contents($imagePath, $imageData);

                            //update src html
                            $img->setAttribute('src', $imageName);
                        }
                    }
                }
            }
            //set value database
            $articles->article_detail = $dom->saveHTML();
        }
        $articles->save();

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
