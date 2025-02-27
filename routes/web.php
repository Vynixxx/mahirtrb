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
});

//error page    
Route::get('/cred/logout', function() {
    abort(404);
});
Route::get('/cred/postLogin', function() {
    abort(404);
});