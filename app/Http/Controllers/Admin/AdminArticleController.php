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
        $articles = Article::with('subCategory.category')->get();
        return view('backend.blog.artikel.index', compact('articles'));
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
    public function edit(Request $request, string $slug)
    {
        //
        $articles = Article::where('slug', $slug)->firstOrFail();
        $subCategories = SubCategory::with('category')->get();
        $tags = Tag::where('article_id', $articles->id)->get();
        return view('backend.blog.artikel.edit', compact('articles','subCategories','tags'));
    }

    //
    public function update(Request $request, string $slug)
    {
        //
        $request->validate([
            'title' => 'required|string|max:100',
            'data_images' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',
            'article_category' => 'required',
            'is_share' => 'required',
            'article_tags' => 'required',
            'is_comment' => 'required',
            'description' => 'required',
        ]);

        $articles = Article::where('slug', $slug)->firstOrFail();

        $articles->subcategory_id = $request->article_category;
        $articles->article_title = $request->title;
        $articles->meta_share = $request->is_share;
        $articles->meta_comment = $request->is_comment;

        // Tangani slug (pastikan unik)
        $newSlug = Str::slug($request->title);

        if ($newSlug !== $articles->slug) {
            # code...
            $slugExists = Article::where('slug', $newSlug)
            ->where('id', '!=', $articles->id)
            ->exists();

            if ($slugExists) {
                $count = 1;
                $baseSlug = $newSlug;

                do {
                    $newSlug = $baseSlug . '-' . $count++;
                } while (Article::where('slug', $newSlug)->where('id', '!=', $articles->id)->exists());
            }
            $articles->slug = $newSlug;
        }

        //tangani file image jika ada update
        if ($request->hasFile('data_images')) {
            # code...
            if ($articles->article_img && file_exists(public_path($articles->article_img))) {
                # code...
                unlink(public_path($articles->article_img));
            }

            $file = $request->file('data_images');

            $finalname = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension(); // Tambah uniqid untuk unik
            $file->move(public_path('uploads/data_images'), $finalname); // Pakai folder data_imagess

            $articles->article_img = '/uploads/data_images/' . $finalname;
        } else {
            $articles->article_img = $articles->article_img;
        }


        //tangani proses update description dari summernote
        // Handle description update from Summernote
        $description = $request->description;

        if ($description) {
            $dom = new \DOMDocument();
            @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            // Get existing images from the current article content
            $existingDom = new \DOMDocument();
            @$existingDom->loadHTML('<?xml encoding="utf-8" ?>' . $articles->article_detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $existingImages = $existingDom->getElementsByTagName('img');
            $existingImagePaths = [];
            foreach ($existingImages as $img) {
                $src = $img->getAttribute('src');
                if (strpos($src, '/uploads/images/') === 0) {
                    $existingImagePaths[] = $src;
                }
            }

            // Process new images in the updated content
            $images = $dom->getElementsByTagName('img');
            $newImagePaths = [];

            foreach ($images as $key => $img) {
                $src = $img->getAttribute('src');

                // Handle base64 images (new images)
                if (strpos($src, 'data:image/') === 0) {
                    $dataParts = explode(',', $src);

                    if (count($dataParts) == 2) {
                        $base64Data = $dataParts[1];
                        $imageData = base64_decode($base64Data);

                        if ($imageData !== false) {
                            $mimeType = explode(';', explode(':', $dataParts[0])[1])[0];
                            $extension = str_replace('image/', '', $mimeType);

                            // Create unique file name
                            $imageName = '/uploads/images/' . time() . '_' . uniqid() . '_' . $key . '.' . $extension;
                            $imagePath = public_path($imageName);

                            // Save image to folder
                            file_put_contents($imagePath, $imageData);

                            // Update src in HTML
                            $img->setAttribute('src', $imageName);
                            $newImagePaths[] = $imageName;
                        }
                    }
                } else {
                    // Keep track of existing images that are still in use
                    if (strpos($src, '/uploads/images/') === 0) {
                        $newImagePaths[] = $src;
                    }
                }
            }

            // Delete images that are no longer in the updated content
            foreach ($existingImagePaths as $oldImagePath) {
                if (!in_array($oldImagePath, $newImagePaths) && file_exists(public_path($oldImagePath))) {
                    unlink(public_path($oldImagePath));
                }
            }

            $articles->article_detail = $dom->saveHTML();
        }


        //tangani tag
        if ($request->article_tags != '') {
            //ambil tag yang sudah ada
            $existingTags = Tag::where('article_id', $articles->id)->pluck('tag_name')->toArray();

            //pisahkan tag baru yang diinputkan
            $newTags = explode(',', $request->article_tags);
            $newTags = array_map('trim', $newTags);
            $newTags = array_unique($newTags);

            //tambahkan tag yang belum ada
            foreach ($newTags as $tagName) {
                # code...
                if (!in_array($tagName, $existingTags)) {
                    $tag = new Tag();
                    $tag->article_id = $articles->id;
                    $tag->tag_name = $tagName;
                    $tag->save();
                }
            }
        }

        $articles->save();

        return redirect()->back()->with('success', 'Article updated Successfully');
    }

    public function destroy(string $slug)
    {
        $articles = Article::where('slug', $slug)->firstOrFail();

        if ($articles->article_img && file_exists(public_path($articles->article_img))) {
            # code...
            unlink(public_path($articles->article_img));
        }

        if ($articles->article_detail) {
            $dom = new \DOMDocument();
            $dom->loadHTML('<?xml encoding="utf-8" ?>' . $articles->article_detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');

            foreach ($images as $img) {
                $src = $img->getAttribute('src');
                if (strpos($src, '/uploads/images/') === 0 && file_exists(public_path($src))) {
                    unlink(public_path($src));
                }
            }
        }
        $articles->delete();
        return redirect()->route('article.index')->with('success', 'Record deleted has successfully');
    }


    //
    public function show(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
        $tag = $request->input('tag');

        //guery artikel dengan search
        $query = Article::query();

        if ($search) {
            $query->where(function ($q) use ($search){
                $q->where('article_title', 'like', "%{$search}%")
                ->orWhere('article_detail', 'like', "%{$search}%");
            });
        }

        if ($category) {
            $query->where('subcategory_id', $category);
        }

        if ($tag) {
            $query->whereHas('tags', function ($q) use ($tag){
                $q->where('tag_name', $tag);
            });
        }

        $article_data = $query->orderBy('id', 'desc')->paginate(5);
        $subCategory = SubCategory::all();
        $tags = Tag::selectRaw('MIN(id) as id, tag_name')->groupBy('tag_name')->get();


        return view('blog.artikel', compact(
            'search',
            'category',
            'tags',
            'subCategory',
            'article_data',
        ));
    }


}
