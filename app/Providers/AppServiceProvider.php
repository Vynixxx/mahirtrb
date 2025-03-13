<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Kontak;
use App\Models\Ekspedisi;
use App\Models\Pabrikasi;
use App\Models\Penyewaan;
use App\Models\Perbaikan;
use App\Models\Supplier;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('admin.layouts.header', function ($view) {
            $messages = Kontak::latest()->take(3)->get(); // Ambil 3 pesan terbaru
            
            // Ambil 5 pemesanan terbaru dari masing-masing kategori
             $latestOrders = collect([])
                ->merge(Ekspedisi::latest()->take(1)->get())
                ->merge(Pabrikasi::latest()->take(1)->get())
                ->merge(Penyewaan::latest()->take(1)->get())
                ->merge(Perbaikan::latest()->take(1)->get())
                ->merge(Supplier::latest()->take(1)->get())
                ->sortByDesc('created_at') // Urutkan dari yang terbaru
                ->take(5);

            // Hitung total jumlah pemesanan dari semua kategori
            $totalOrders = Ekspedisi::count() + Pabrikasi::count() + Penyewaan::count() + Perbaikan::count() + Supplier::count();

            // Kirim data ke view
            $view->with([
                'messages'     => $messages,
                'latestOrders' => $latestOrders,
                'totalOrders'  => $totalOrders,
            ]);
        });
    }
}
