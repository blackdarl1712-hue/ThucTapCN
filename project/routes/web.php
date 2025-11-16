<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index'); 
})->name('trangchu');


Route::get('/truyen/{slug}', 'TruyenController@showDetail')->name('chitiet_truyen');

Route::get('/truyen/{slug}/chuong-{chuong_so}', 'TruyenController@readChapter')->name('doc_chuong');

Route::get('/the-loai', 'TheLoaiController@index')->name('theloai_frontend');

Route::get('/tac-gia', 'TacGiaController@index')->name('tacgia_frontend');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    
    Route::get('/', 'AdminController@index')->name('admin'); 
    
    Route::get('/truyen', 'TruyenController@danhsach')->name('danhsachtruyen');
    Route::get('/truyen/them', 'TruyenController@them')->name('them_truyen');
    Route::post('/truyen/store', 'TruyenController@store')->name('luu_truyen');
    Route::get('/truyen/sua/{id}', 'TruyenController@sua')->name('sua_truyen');
    Route::put('/truyen/update/{id}', 'TruyenController@update')->name('capnhat_truyen');
    Route::delete('/truyen/xoa/{id}', 'TruyenController@xoa')->name('xoa_truyen');
    
    Route::get('/chuong-cho-duyet', 'ChuongController@choduyet')->name('chuongchoduyet');
    
    Route::get('/the-loai', 'TheLoaiController@danhsach')->name('theloai');
    Route::get('/the-loai/them', 'TheLoaiController@them')->name('theloai.them'); // Route thêm mới (đã dùng ở bước trước)
    Route::get('/the-loai/sua/{id}', 'TheLoaiController@sua')->name('theloai.sua'); // Route sửa (đã dùng ở bước trước)
    Route::delete('/the-loai/xoa/{id}', 'TheLoaiController@xoa')->name('theloai.xoa'); // Route xóa (đã dùng ở bước trước)
    
    Route::get('/tac-gia', 'TacGiaController@danhsach')->name('tacgia');

    Route::get('/nguoi-dung', 'UserController@danhsach')->name('nguoidung');
    
    Route::get('/binh-luan', 'BinhLuanController@danhsach')->name('binhluan');
    
    Route::get('/cai-dat', 'SettingController@index')->name('caidat');
    
});

?>