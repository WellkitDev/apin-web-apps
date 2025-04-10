<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\PageItemController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('beranda.index');
// });

//frontend Tentang
// Route::get('/tentang', function () {
//     return view('tentang.index');
// });
// Route::get('/tentang/program', function () {
//     return view('tentang.program');
// });
// Route::get('/tentang/program/detail', function () {
//     return view('tentang.program-detail');
// });
// Route::get('/tentang/layanan', function () {
//     return view('tentang.layanan');
// });
// Route::get('/tentang/layanan/detail', function () {
//     return view('tentang.layanan-detail');
// });

//frontend Seminar
// Route::get('/seminar', function () {
//     return view('seminar.index');
// });
// Route::get('/seminar/detail', function () {
//     return view('seminar.detail-seminar');
// });
// Route::get('/seminar/arsip', function () {
//     return view('seminar.arsip');
// });

//frontend Blog
// Route::get('/blog/artikel', function () {
//     return view('blog.artikel');
// });
// Route::get('/blog/artikel/detail', function () {
//     return view('blog.artikel-details');
// });
// Route::get('/blog/gallery', function () {
//     return view('blog.gallery');
// });
// Route::get('/blog/gallery/detail', function () {
//     return view('blog.gallery-detail');
// });

//frontend Kerjasama
Route::get('/kerjasama', function () {
    return view('kerjasama.index');
});
// Route::get('/kerjasama/detail', function () {
//     return view('kerjasama.kerjasama-detail');
// });

// //frontend Jurnal
// Route::get('/jurnal', function () {
//     return view('jurnal.index');
// });
// Route::get('/jurnal/detail', function () {
//     return view('jurnal.jurnal-detail');
// });

// //frontend Anggota
// Route::get('/anggota', function () {
//     return view('anggota.index');
// });
// Route::get('/anggota/detail', function () {
//     return view('anggota.anggota-detail');
// });

//frontend faq
// Route::get('/faq', function () {
//     return view('faq.index');
// });

//frontend Kontak
Route::get('/contact', function () {
    return view('contact.index');
});


//backend starter
// Route::get('/new', function () {
//     return view('backend.stater-page');
// });

//coming starter
Route::get('/coming-soon', function () {
    return view('errors.coming-soon');
});

//backend PagesController
Route::get('pages', [PagesController::class, 'index'])->name('pages.index');
Route::get('pages/create', [PagesController::class, 'create'])->name('pages.create');
Route::post('pages/create', [PagesController::class, 'store'])->name('pages.store');
Route::get('pages/{slug}', [PagesController::class, 'edit'])->name('pages.edit');
Route::post('pages/{slug}', [PagesController::class, 'update'])->name('pages.update');
Route::delete('pages/delete/{id}', [PagesController::class, 'destroy'])->name('pages.destroy');

//backend PagesItemController
Route::get('pages-item', [PageItemController::class, 'index'])->name('page-item.index');
Route::get('pages-item/create', [PageItemController::class, 'create'])->name('page-item.create');
Route::post('pages-item/create', [PageItemController::class, 'store'])->name('page-item.store');
Route::get('pages-item/{slug}', [PageItemController::class, 'edit'])->name('page-item.edit');
Route::post('pages-item/{slug}', [PageItemController::class, 'update'])->name('page-item.update');
Route::delete('pages-item/delete/{id}', [PageItemController::class, 'destroy'])->name('page-item.destroy');

// Frontend show page

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{slug}', [PagesController::class, 'showPage'])->name('pages.show');
Route::get('/{slug}/{subSlug}', [PagesController::class, 'showSubPage'])->name('pages.show.sub');