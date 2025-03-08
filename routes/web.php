<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\pageAdmin;
use App\Http\Controllers\pageuser;
use App\Http\Middleware\IsAdmin;

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
Route::get('/', [pageuser::class, 'halamanhome'])->name('home');
Route::get('/tentang-kami', [pageuser::class, 'halamanabout'])->name('tentang-kami');
Route::get('/mitra-kami', [pageuser::class, 'halamanmitra'])->name('mitra');
Route::get('/layanan-kami', [pageuser::class, 'halamanlayanan'])->name('layanan');
Route::get('/galeri', [pageuser::class, 'halamangaleri'])->name('galeri');
Route::get('/galeri/filter/{kategori}', [pageuser::class, 'filter']);
Route::get('/kontak-kami', [pageuser::class, 'halamankontak'])->name('kontak');
Route::get('/pemesanan', [pageuser::class, 'halamanpesan'])->name('pemesanan');
Route::get('/jenis-alat-berat', [pageuser::class, 'halamanproduk'])->name('produk');
Route::get('/syarat-dan-ketentuan', [pageuser::class, 'halamansk'])->name('sk');
Route::get('/ekspedisi', [pageuser::class, 'halamanekspedisi'])->name('ekspedisi');
Route::get('/pabrikasi', [pageuser::class, 'halamanpabrikasi'])->name('pabrikasi');
Route::get('/penyewaan', [pageuser::class, 'halamansewa'])->name('penyewaan');
Route::get('/perbaikan', [pageuser::class, 'halamanperbaikan'])->name('perbaikan');
Route::get('/pesan-ekspedisi', [pageuser::class, 'halamanpesanekspedisi'])->name('pesanekspedisi');
Route::get('/pesan-pabrikasi', [pageuser::class, 'halamanpesanpabrikasi'])->name('pesanpabrikasi');
Route::get('/pesan-penyewaan', [pageuser::class, 'halamanpesanpenyewaan'])->name('pesanpenyewaan');
Route::get('/pesan-perbaikan', [pageuser::class, 'halamanpesanperbaikan'])->name('pesanperbaikan');


//post
Route::post('/postkontak', [pageuser::class, 'tambahkontak'])->name('postkontak');


// admin login
Route::get('/cred/login', [admin::class, 'showLoginForm'])->name('cred.login');
Route::post('cred/postLogin', [admin::class, 'postLogin'])->name('cred.postLogin');
Route::post('cred/logout', [admin::class, 'logout'])->name('cred.logout');


//view admin
Route::middleware([IsAdmin::class])->group(function () {
    //halaman
    Route::get('/admin/dashboard', [admin::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/layanan', [pageAdmin::class, 'halamanlayanan'])->name('admin.layanan');
    Route::get('/admin/galeri', [pageAdmin::class, 'halamangaleri'])->name('admin.galeri');
    Route::get('/admin/kontak', [pageAdmin::class, 'halamankontak'])->name('admin.kontak');
    Route::get('/admin/mitra', [pageAdmin::class, 'halamanmitra'])->name('admin.mitra');
    Route::get('/admin/profile', [pageAdmin::class, 'halamanprofile'])->name('admin.profile');
    Route::get('/admin/ekspedisi', [pageAdmin::class, 'halamanekspedisi'])->name('admin.ekspedisi');
    Route::get('/admin/pabrikasi', [pageAdmin::class, 'halamanpabrikasi'])->name('admin.pabrikasi');
    Route::get('/admin/penyewaan', [pageAdmin::class, 'halamanpenyewaan'])->name('admin.penyewaan');
    Route::get('/admin/perbaikan', [pageAdmin::class, 'halamanperbaikan'])->name('admin.perbaikan');
    Route::get('/admin/selengkapnya/{id}', [pageAdmin::class, 'halamanselengkapnya'])->name('admin.selengkapnya');



    //tambah
    Route::get('/admin/tambah-produk', [pageadmin::class,'tambahlayanan'])->name('admin.tambahlayanan');
    Route::post('/tambahlayanan', [pageadmin::class,'layanantambah'])->name('postTambahlayanan');
    Route::get('/admin/tambah-galeri', [pageadmin::class,'tambahgaleri'])->name('admin.tambahgaleri');
    Route::post('/tambahgaleri', [pageadmin::class,'galeritambah'])->name('postTambahgaleri');
    Route::get('/admin/tambah-mitra', [pageadmin::class,'tambahmitra'])->name('admin.tambahmitra');
    Route::post('/tambahmitra', [pageadmin::class,'mitratambah'])->name('postTambahmitra');

    //edit
    Route::get('/admin/editlayanan/{id}', [pageAdmin::class,'editlayanan'])->name('admin.editlayanan');
    Route::post('/postEditlayanan/{id}', [pageadmin::class, 'postEditlayanan'])->name('postEditlayanan');
    Route::get('/admin/editgaleri/{id}', [pageadmin::class, 'editgaleri'])->name('editgaleri');
    Route::post('/postEditgaleri/{id}', [pageadmin::class, 'postEditgaleri'])->name('postEditgaleri');
    Route::get('/admin/editmitra/{id}', [pageadmin::class, 'editmitra'])->name('editmitra');
    Route::post('/postEditmitra/{id}', [pageadmin::class, 'postEditmitra'])->name('postEditmitra');

    //delete
    Route::get('/admin/deletelayanan/{id}', [pageadmin::class,'deletelayanan'])->name('admin.deletelayanan');
    Route::get('/admin/deletegaleri/{id}', [pageadmin::class,'deletegaleri'])->name('admin.deletegaleri');
    Route::get('/admin/deletekontak/{id}', [pageadmin::class,'deletekontak'])->name('admin.deletekontak');
    Route::get('/admin/deletemitra/{id}', [pageadmin::class,'deletemitra'])->name('admin.deletemitra');

});

//error page    
Route::get('/cred/logout', function() {
    abort(404);
});
Route::get('/cred/postLogin', function() {
    abort(404);
});
Route::get('/postkontak', function() {
    abort(404);
});
Route::get('/tambahlayanan', function() {
    abort(404);
});
Route::get('/tambahgaleri', function() {
    abort(404);
});
Route::get('/tambahmitra', function() {
    abort(404);
});