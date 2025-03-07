<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageItem;
use Illuminate\Support\Str;

class PageItemController extends Controller
{
    //
    public function index()
    {
        $pageItems = PageItem::orderBy('sort_order', 'asc')->get();
        return view('backend.page-items.index-page-item', compact('pageItems'));
    }

    //
    public function create()
    {
        $pages = Page::all();
        return view('backend.page-items.create-page-item', compact('pages'));
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'page_id' => 'required|integer',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5048',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|numeric',
            'is_active' => 'nullable|boolean',
        ]);

        $pageItem = new PageItem();
        $pageItem->title = $request->title;
        $pageItem->page_id = $request->page_id;
        $pageItem->slug = Str::slug($request->title);
        $pageItem->sort_order = $request->sort_order;
        $pageItem->is_active = $request->is_active;

        // Simpan gambar utama (jika ada)
        if ($request->hasFile('image')) {
                $file = $request->file('image');
                $finalname = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension(); // Tambah uniqid untuk unik
                $file->move(public_path('uploads/images'), $finalname); // Pakai folder images
                $pageItem->image = '/uploads/images/' . $finalname;
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
            
            $pageItem->description = $dom->saveHTML();
        }

        $pageItem->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    //
    public function edit($slug)
    {
        $pageItem = PageItem::where('slug', $slug)->first();
        $pages = Page::all();
        return view('backend.page-items.edit-page-item', compact('pageItem', 'pages'));
    }

    //
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'page_id' => 'required|integer',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5048',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|numeric',
            'is_active' => 'nullable|boolean',
        ]);

        $slug = rawurldecode($slug);
        $pageItem = PageItem::where('slug', $slug)->firstOrFail();

        $pageItem->title = $request->title;
        $pageItem->page_id = $request->page_id;
        $pageItem->sort_order = $request->sort_order;
        $pageItem->is_active = $request->is_active;

        // Tangani slug (pastikan unik)
        $newSlug = Str::slug($request->title);
        
        if ($newSlug !== $pageItem->slug) { // Hanya update slug jika title berubah
            $slugExists = PageItem::where('slug', $newSlug)
                ->where('id', '!=', $pageItem->id) // Kecuali entri ini sendiri
                ->exists();
            
            if ($slugExists) {
                $count = 1;
                $baseSlug = $newSlug;
                do {
                    $newSlug = $baseSlug . '-' . $count++;
                } while (PageItem::where('slug', $newSlug)->where('id', '!=', $pageItem->id)->exists());
            }
            $pageItem->slug = $newSlug;
        }

        // Tangani gambar utama
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($pageItem->image && file_exists(public_path($pageItem->image))) {
                unlink(public_path($pageItem->image));
            }

            $file = $request->file('image');
            $finalname = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/images'), $finalname);
            $pageItem->image = '/uploads/images/' . $finalname;
        } else {
            $pageItem->image = $pageItem->image;
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
            
            $pageItem->description = $dom->saveHTML();
        }

        $pageItem->save();

        return redirect()->route('page-item.index')->with('success', 'Page item updated successfully');
    }

    //
    public function destroy($id)
    {
        $pageItem = PageItem::findOrFail($id);

        // Hapus gambar utama jika ada
        if ($pageItem->image && file_exists(public_path($pageItem->image))) {
            unlink(public_path($pageItem->image));
        }

        // Hapus gambar dalam description (Summernote)
        if ($pageItem->description) {
            $dom = new \DOMDocument();
            @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $pageItem->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

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
        $pageItem->delete();

        return redirect()->route('page-item.index')->with('success', 'Halaman berhasil dihapus');
    }

}
