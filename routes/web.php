<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\pageAdmin;
use App\Http\Controllers\pageuser;
use App\Http\Middleware\IsAdmin;

Route::get('/', [pageuser::class, 'halamanhome'])->name('home');
Route::get('/tentang-kami', [pageuser::class, 'halamanabout'])->name('tentang-kami');
Route::get('/mitra-kami', [pageuser::class, 'halamanmitra'])->name('mitra');
Route::get('/layanan-kami', [pageuser::class, 'halamanlayanan'])->name('layanan');
Route::get('/galeri', [pageuser::class, 'halamangaleri'])->name('galeri');
Route::get('/kontak-kami', [pageuser::class, 'halamankontak'])->name('kontak');
Route::get('/cara-pesan', [pageuser::class, 'halamanpesan'])->name('pemesanan');
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
    Route::get('/admin/pemesanan', [pageAdmin::class, 'halamanpemesanan'])->name('admin.pemesanan');
    Route::get('/admin/profile', [pageAdmin::class, 'halamanprofile'])->name('admin.profile');

    //tambah
    Route::get('/admin/tambahlayanan', [pageadmin::class,'tambahlayanan'])->name('admin.tambahlayanan');
    Route::post('/tambahlayanan', [pageadmin::class,'layanantambah'])->name('postTambahlayanan');
    Route::get('/admin/tambahgaleri', [pageadmin::class,'tambahgaleri'])->name('admin.tambahgaleri');
    Route::post('/tambahgaleri', [pageadmin::class,'galeri'])->name('postTambahgaleri');

    //edit
    Route::get('/editlayanan/{id}', [pageadmin::class, 'editlayanan'])->name('editlayanan');
    Route::post('/postEditlayanan/{id}', [pageadmin::class, 'postEditlayanan'])->name('postEditlayanan');
    Route::get('/editgaleri/{id}', [pageadmin::class, 'editgaleri'])->name('editgaleri');
    Route::post('/postEditgaleri/{id}', [pageadmin::class, 'postEditgaleri'])->name('postEditgaleri');


    //delete
    Route::get('/admin/deletelayanan/{id}', [pageadmin::class,'deletelayanan'])->name('admin.deletelayanan');
    Route::get('/admin/deletegaleri/{id}', [pageadmin::class,'deletegaleri'])->name('admin.deletegaleri');

});

//error page    
Route::get('/cred/logout', function() {
    abort(404);
});
Route::get('/cred/postLogin', function() {
    abort(404);
});