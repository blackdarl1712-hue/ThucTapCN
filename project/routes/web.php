<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\admin\TruyenController;

Route::get('/', function () {
    return view('index'); 
})->name('home'); 

Route::get('/home/linhdi', function () {
    return view('home/theloai/linhdi');
})->name('linhdi');  

Route::get('/home/huyenhuyen', function () {
    return view('home/theloai/huyenhuyen');
})->name('huyenhuyen'); 

Route::get('/home/dothi', function () {
    return view('home/theloai/dothi');
})->name('dothi'); 

Route::get('/home/tienhiep', function () {
    return view('home/theloai/tienhiep');
})->name('tienhiep'); 

Route::get('/home/ngontinh', function () {
    return view('home/theloai/ngontinh');
})->name('ngontinh'); 

Route::get('home/tintuc', function () {
    return view('home/tintuc'); 
})->name('tintuc'); 

Route::get('/truyen/{slug}', function ($slug) {
    return view('chitiet');
})->name('chitiet_truyen');

Route::get('/admin', function () {
    return view('admin'); 
})->name('admin');

Route::get('/admin/quanlytruyen', function () {
    return view('admin/danhsachtruyen'); 
})->name('danhsachtruyen');

Route::get('/admin/truyenchoduyet', function () {
    return view('admin/truyenchoduyet');
})->name('truyenchoduyet');

Route::get('/admin/binhluan', function () {
    return view('admin/binhluan');
})->name('binhluan');

Route::get('/admin/quanlytheloai', function () {
    return view('admin/quanlytheloai'); 
})->name('quanlytheloai');

// --- Tác giả
Route::get('/admin/tacgia', function () {
    return view('admin/tacgia');
})->name('tacgia');

// --- Người dùng
Route::get('/admin/nguoidung', function () {
    return view('admin/nguoidung');
})->name('nguoidung');

// --- Bình luận
Route::get('/admin/binhluan', function () {
    return view('admin/binhluan');
})->name('binhluan');

// --- Cài đặt
Route::get('/admin/caidat', function () {
    return view('admin/caidat');
})->name('caidat');

Route::middleware('auth')->group(function () {
    Route::view('/admin', 'layout.home')->name('admin');
});

Route::get('logout',[HomeController::class,'logout'
])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'
])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
