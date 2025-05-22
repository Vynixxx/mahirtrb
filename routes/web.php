<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\pageAdmin;
use App\Http\Controllers\pageuser;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\SetLocale;


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'id'])) {
        abort(400);
    }

    session()->put('locale', $locale);
    return redirect()->back();
})->name('setLocale');
Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', [pageuser::class, 'halamanhome'])->name('home');
    Route::get('/about', [pageuser::class, 'halamanabout'])->name('tentang-kami');
    Route::get('/partners', [pageuser::class, 'halamanmitra'])->name('mitra');
    Route::get('/services', [pageuser::class, 'halamanlayanan'])->name('layanan');
    Route::get('/gallery', [pageuser::class, 'halamangaleri'])->name('galeri');
    Route::get('/gallery/filter/{kategori}', [pageuser::class, 'filter']);
    Route::get('/contact', [pageuser::class, 'halamankontak'])->name('kontak');
    Route::get('/order', [pageuser::class, 'halamanpesan'])->name('pemesanan');
    Route::get('/heavy-equipment-types', [pageuser::class, 'halamanproduk'])->name('produk');
    Route::get('/terms-and-conditions', [pageuser::class, 'halamansk'])->name('sk');
    Route::get('/expedition', [pageuser::class, 'halamanekspedisi'])->name('ekspedisi');
    Route::get('/fabrication', [pageuser::class, 'halamanpabrikasi'])->name('pabrikasi');
    Route::get('/rentals', [pageuser::class, 'halamansewa'])->name('penyewaan');
    Route::get('/repair', [pageuser::class, 'halamanperbaikan'])->name('perbaikan');
    Route::get('/supplier', [pageuser::class, 'halamansupplier'])->name('supplier');
    Route::get('/order-expedition', [pageuser::class, 'halamanpesanekspedisi'])->name('pesanekspedisi');
    Route::get('/order-fabrication', [pageuser::class, 'halamanpesanpabrikasi'])->name('pesanpabrikasi');
    Route::get('/order-rental', [pageuser::class, 'halamanpesanpenyewaan'])->name('pesanpenyewaan');
    Route::get('/order-repair', [pageuser::class, 'halamanpesanperbaikan'])->name('pesanperbaikan');
    Route::get('/order-supplier', [pageuser::class, 'halamanpesansupplier'])->name('pesansupplier');
});

//post
Route::post('/postkontak', [pageuser::class, 'tambahkontak'])->name('postkontak');
Route::post('/postPesanEkspedisi', [pageuser::class, 'tambahekspedisi'])->name('postPesanEkspedisi');
Route::post('/postPesanpabrikasi', [pageuser::class, 'tambahpabrikasi'])->name('postPesanpabrikasi');
Route::post('/postPesanpenyewaan', [pageuser::class, 'tambahpenyewaan'])->name('postPesanpenyewaan');
Route::post('/postPesanperbaikan', [pageuser::class, 'tambahperbaikan'])->name('postPesanperbaikan');
Route::post('/postPesansupplier', [pageuser::class, 'tambahsupplier'])->name('postPesansupplier');



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
    Route::get('/admin/supplier', [pageAdmin::class, 'halamansupplier'])->name('admin.supplier');
    Route::get('/admin/selengkapnya/{id}', [pageAdmin::class, 'halamanselengkapnya'])->name('admin.selengkapnya');
    Route::get('/admin/eksselengkapnya/{id}', [pageAdmin::class, 'halamaneksselengkapnya'])->name('admin.eksselengkapnya');
    Route::get('/admin/pabsselengkapnya/{id}', [pageAdmin::class, 'halamanpabsselengkapnya'])->name('admin.pabsselengkapnya');
    Route::get('/admin/sewaselengkapnya/{id}', [pageAdmin::class, 'halamansewaselengkapnya'])->name('admin.sewaselengkapnya');
    Route::get('/admin/perbselengkapnya/{id}', [pageAdmin::class, 'halamanperbselengkapnya'])->name('admin.perbselengkapnya');
    Route::get('/admin/supselengkapnya/{id}', [pageAdmin::class, 'halamansupselengkapnya'])->name('admin.supselengkapnya');

    //tambah
    Route::get('/admin/tambah-produk', [pageadmin::class,'tambahlayanan'])->name('admin.tambahlayanan');
    Route::post('/tambahlayanan', [pageadmin::class,'layanantambah'])->name('postTambahlayanan');
    Route::get('/admin/tambah-galeri', [pageadmin::class,'tambahgaleri'])->name('admin.tambahgaleri');
    Route::post('/tambahgaleri', [pageadmin::class,'galeritambah'])->name('postTambahgaleri');
    Route::get('/admin/tambah-mitra', [pageadmin::class,'tambahmitra'])->name('admin.tambahmitra');
    Route::post('/tambahmitra', [pageadmin::class,'mitratambah'])->name('postTambahmitra');

    Route::post('/admin/kirim-invoice/ekspedisi', [pageAdmin::class, 'kirimInvoiceEkspedisi'])->name('admin.kirimInvoiceEkspedisi');
    Route::post('/admin/kirim-invoice/pabrikasi', [pageAdmin::class, 'kirimInvoicePabrikasi'])->name('admin.kirimInvoicePabrikasi');
    Route::post('/admin/kirim-invoice/penyewaan', [pageAdmin::class, 'kirimInvoicePenyewaan'])->name('admin.kirimInvoicePenyewaan');
    Route::post('/admin/kirim-invoice/perbaikan', [pageAdmin::class, 'kirimInvoicePerbaikan'])->name('admin.kirimInvoicePerbaikan');
    Route::post('/admin/kirim-invoice/supplier', [pageAdmin::class, 'kirimInvoiceSupplier'])->name('admin.kirimInvoiceSupplier');


    //edit
    Route::get('/admin/editlayanan/{id}', [pageAdmin::class,'editlayanan'])->name('admin.editlayanan');
    Route::post('/postEditlayanan/{id}', [pageadmin::class, 'postEditlayanan'])->name('postEditlayanan');
    Route::get('/admin/editgaleri/{id}', [pageadmin::class, 'editgaleri'])->name('editgaleri');
    Route::post('/postEditgaleri/{id}', [pageadmin::class, 'postEditgaleri'])->name('postEditgaleri');
    Route::get('/admin/editmitra/{id}', [pageadmin::class, 'editmitra'])->name('editmitra');
    Route::post('/postEditmitra/{id}', [pageadmin::class, 'postEditmitra'])->name('postEditmitra');

    //delete
    Route::delete('/admin/deletelayanan/{id}', [pageadmin::class,'deletelayanan'])->name('admin.deletelayanan');
    Route::delete('/admin/deletegaleri/{id}', [pageadmin::class,'deletegaleri'])->name('admin.deletegaleri');
    Route::delete('/admin/deletekontak/{id}', [pageadmin::class,'deletekontak'])->name('admin.deletekontak');
    Route::delete('/admin/deletemitra/{id}', [pageadmin::class,'deletemitra'])->name('admin.deletemitra');
    Route::delete('/admin/deletekspedisi/{id}', [pageadmin::class,'deleteks'])->name('admin.deleteks');
    Route::delete('/admin/deletepabrikasi/{id}', [pageadmin::class,'deletepabrikasi'])->name('admin.deletepabrikasi');
    Route::delete('/admin/deletepenyewaan/{id}', [pageadmin::class,'deletepenyewaan'])->name('admin.deletepenyewaan');
    Route::delete('/admin/deleteperbaikan/{id}', [pageadmin::class,'deleteperbaikan'])->name('admin.deleteperbaikan');
    Route::delete('/admin/deletesupplier/{id}', [pageadmin::class,'deletesupplier'])->name('admin.deletesupplier');

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