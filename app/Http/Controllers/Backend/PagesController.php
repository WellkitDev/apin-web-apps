<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;
use App\Models\PageItem;
use DOMDocument;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pages = Page::all();
        return view('backend.pages.index-page', compact('pages'));
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
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ]);

        $page = new Page();
        $page->title = $request->title;
        $page->type = $request->type;
        $page->slug = Str::slug($request->title);
        $page->is_active = $request->is_active;

        // Simpan gambar utama (jika ada)
        if ($request->hasFile('image')) {
                $file = $request->file('image');
                $finalname = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension(); // Tambah uniqid untuk unik
                $file->move(public_path('uploads/images'), $finalname); // Pakai folder images
                $page->image = '/uploads/images/' . $finalname;
        }

        // Proses description dari Summernote
        $description = $request->description;
        if ($description) {
            $dom = new \DOMDocument();

            @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
            
            foreach ($images as $key => $img) {
                $src = $img->getAttribute('src');
                
                // Cek apakah gambar adalah base64
                if (strpos($src, 'data:image/') === 0) {
                    $dataParts = explode(',', $src);

                    if (count($dataParts) == 2) {
                        $base64Data = $dataParts[1];
                        $imageData = base64_decode($base64Data);
                        
                        if ($imageData !== false) {
                            // Tentukan tipe gambar dari header base64
                            $mimeType = explode(';', explode(':', $dataParts[0])[1])[0];
                            $extension = str_replace('image/', '', $mimeType);
                            
                            // Buat nama file unik
                            $imageName = '/uploads/images/' . time() . '_' . uniqid() . '_' . $key . '.' . $extension;
                            $imagePath = public_path($imageName);
                            
                            // Simpan gambar ke folder public/uploads/images
                            file_put_contents($imagePath, $imageData);
                            
                            // Update src di HTML
                            $img->setAttribute('src', $imageName);
                        }
                    }
                }
            }
            
            $page->description = $dom->saveHTML();
        }

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
    public function edit(string $slug)
    {
        //
        $slug = rawurldecode($slug);
        $page = Page::where('slug', $slug)->first();
        return view('backend.pages.edit-page', compact('page'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5048',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ]);

        $slug = rawurldecode($slug);
        $page = Page::where('slug', $slug)->firstOrFail();

        // Update data dasar
        $page->title = $request->title;
        $page->type = $request->type;
        $page->is_active = $request->boolean('is_active', true);
        
        // Tangani slug (pastikan unik)
        $newSlug = Str::slug($request->title);
        
        if ($newSlug !== $page->slug) { // Hanya update slug jika title berubah
            $slugExists = Page::where('slug', $newSlug)
                ->where('id', '!=', $page->id) // Kecuali entri ini sendiri
                ->exists();
            
            if ($slugExists) {
                $count = 1;
                $baseSlug = $newSlug;
                do {
                    $newSlug = $baseSlug . '-' . $count++;
                } while (Page::where('slug', $newSlug)->where('id', '!=', $page->id)->exists());
            }
            $page->slug = $newSlug;
        }

        // Tangani gambar utama
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($page->image && file_exists(public_path($page->image))) {
                unlink(public_path($page->image));
            }

            $file = $request->file('image');
            $finalname = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/images'), $finalname);
            $page->image = '/uploads/images/' . $finalname;
        } else {
            $page->image = $page->image;
        }

        // Proses description dari Summernote
        $description = $request->description;
        if ($description) {
            $dom = new \DOMDocument();
            @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
            
            foreach ($images as $key => $img) {
                $src = $img->getAttribute('src');
                
                // Cek apakah gambar adalah base64 (hanya proses gambar baru, skip path yang sudah ada)
                if (strpos($src, 'data:image/') === 0) {
                    $dataParts = explode(',', $src);
                    if (count($dataParts) == 2) {
                        $base64Data = $dataParts[1];
                        $imageData = base64_decode($base64Data);
                        
                        if ($imageData !== false) {
                            $mimeType = explode(';', explode(':', $dataParts[0])[1])[0];
                            $extension = str_replace('image/', '', $mimeType);
                            
                            $imageName = '/uploads/images/' . time() . '_' . uniqid() . '_' . $key . '.' . $extension;
                            $imagePath = public_path($imageName);
                            
                            file_put_contents($imagePath, $imageData);
                            $img->setAttribute('src', $imageName);
                        }
                    }
                }
                // Gambar dengan src seperti '/uploads/images/...' dibiarkan utuh
            }
            
            $page->description = $dom->saveHTML();
        }

        $page->save();

        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);

        // Hapus gambar utama jika ada
        if ($page->image && file_exists(public_path($page->image))) {
            unlink(public_path($page->image));
        }

        // Hapus gambar dalam description (Summernote)
        if ($page->description) {
            $dom = new \DOMDocument();
            @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $page->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
            
            foreach ($images as $img) {
                $src = $img->getAttribute('src');
                // Hanya hapus gambar yang ada di /uploads/images/
                if (strpos($src, '/uploads/images/') === 0 && file_exists(public_path($src))) {
                    unlink(public_path($src));
                }
            }
        }

        // Hapus halaman (cascade akan hapus page_items)
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Halaman berhasil dihapus');
    }

    // Show sub page
    public function showPage($slug)
    {
        $page = Page::where('slug', $slug)
        ->with(['pageItems' => function ($query) {
            $query->where('is_active', true) // Hanya item aktif
                  ->orderBy('sort_order', 'asc'); // Urutkan berdasarkan sort_order
        }])
        ->firstOrFail();
       
        return view('page.index', compact('page'));
    }

    public function showSubPage($slug, $subSlug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $subPage = PageItem::where('page_id', $page->id)
            ->where('slug', $subSlug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('pages.show-sub', compact('page', 'subPage'));
    }
}
