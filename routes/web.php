<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('beranda.index');
});

//frontend Tentang
Route::get('/tentang', function () {
    return view('tentang.index');
});
Route::get('/tentang/program', function () {
    return view('tentang.program');
});
Route::get('/tentang/program/detail', function () {
    return view('tentang.program-detail');
});
Route::get('/tentang/layanan', function () {
    return view('tentang.layanan');
});
Route::get('/tentang/layanan/detail', function () {
    return view('tentang.layanan-detail');
});

//frontend Seminar
Route::get('/seminar', function () {
    return view('seminar.index');
});
Route::get('/seminar/detail', function () {
    return view('seminar.detail-seminar');
});
Route::get('/seminar/arsip', function () {
    return view('seminar.arsip');
});

//frontend Blog
Route::get('/blog/artikel', function () {
    return view('blog.artikel');
});
Route::get('/blog/artikel/detail', function () {
    return view('blog.artikel-details');
});
Route::get('/blog/gallery', function () {
    return view('blog.gallery');
});
Route::get('/blog/gallery/detail', function () {
    return view('blog.gallery-detail');
});

//frontend Kerjasama
Route::get('/kerjasama', function () {
    return view('kerjasama.index');
});
Route::get('/kerjasama/detail', function () {
    return view('kerjasama.kerjasama-detail');
});

//frontend Jurnal
Route::get('/jurnal', function () {
    return view('jurnal.index');
});
Route::get('/jurnal/detail', function () {
    return view('jurnal.jurnal-detail');
});

//frontend Anggota
Route::get('/anggota', function () {
    return view('anggota.index');
});
Route::get('/anggota/detail', function () {
    return view('anggota.anggota-detail');
});

//frontend faq
Route::get('/faq', function () {
    return view('faq.index');
});

//frontend Kontak
Route::get('/contact', function () {
    return view('contact.index');
});

//backend starter
Route::get('/new', function () {
    return view('backend.stater-page');
});