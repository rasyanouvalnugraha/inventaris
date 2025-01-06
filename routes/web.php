<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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

// Route untuk halaman utama
Route::get('/view', function () {
    return view('welcome');
});

// Route untuk login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Hanya dapat diakses oleh pengguna yang login
Route::middleware(['auth'])->group(function () {
    // Route untuk dashboard
    // Route untuk logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', function(){
    return view('dashboard');
});
Route::get('/history', function() {
    $dataDummy = [
        ['barang' => 'Laptop', 'jumlah' => 10, 'satuan' => 'Unit', 'tanggal' => '2024-06-01'],
        ['barang' => 'Mouse', 'jumlah' => 25, 'satuan' => 'Unit', 'tanggal' => '2024-06-02'],
        ['barang' => 'Keyboard', 'jumlah' => 15, 'satuan' => 'Unit', 'tanggal' => '2024-06-03'],
        ['barang' => 'Monitor', 'jumlah' => 8, 'satuan' => 'Unit', 'tanggal' => '2024-06-04'],
        ['barang' => 'Printer', 'jumlah' => 5, 'satuan' => 'Unit', 'tanggal' => '2024-06-05'],
        ['barang' => 'Scanner', 'jumlah' => 7, 'satuan' => 'Unit', 'tanggal' => '2024-06-06'],
        ['barang' => 'Meja Kerja', 'jumlah' => 20, 'satuan' => 'Buah', 'tanggal' => '2024-06-07'],
        ['barang' => 'Kursi Kantor', 'jumlah' => 30, 'satuan' => 'Buah', 'tanggal' => '2024-06-08'],
        ['barang' => 'Lemari Arsip', 'jumlah' => 10, 'satuan' => 'Buah', 'tanggal' => '2024-06-09'],
        ['barang' => 'Proyektor', 'jumlah' => 4, 'satuan' => 'Unit', 'tanggal' => '2024-06-10'],
        ['barang' => 'Whiteboard', 'jumlah' => 6, 'satuan' => 'Buah', 'tanggal' => '2024-06-11'],
        ['barang' => 'Pulpen', 'jumlah' => 200, 'satuan' => 'Pcs', 'tanggal' => '2024-06-12'],
        ['barang' => 'Kertas A4', 'jumlah' => 50, 'satuan' => 'Rim', 'tanggal' => '2024-06-13'],
        ['barang' => 'Stapler', 'jumlah' => 12, 'satuan' => 'Buah', 'tanggal' => '2024-06-14'],
        ['barang' => 'Kalkulator', 'jumlah' => 10, 'satuan' => 'Unit', 'tanggal' => '2024-06-15'],
        ['barang' => 'AC', 'jumlah' => 5, 'satuan' => 'Unit', 'tanggal' => '2024-06-16'],
        ['barang' => 'Telepon Kabel', 'jumlah' => 8, 'satuan' => 'Unit', 'tanggal' => '2024-06-17'],
        ['barang' => 'Speaker', 'jumlah' => 6, 'satuan' => 'Unit', 'tanggal' => '2024-06-18'],
        ['barang' => 'Kamera CCTV', 'jumlah' => 15, 'satuan' => 'Unit', 'tanggal' => '2024-06-19'],
        ['barang' => 'Router WiFi', 'jumlah' => 10, 'satuan' => 'Unit', 'tanggal' => '2024-06-20'],
    ];
    return view ('history', compact('dataDummy'));
});
Route::get('/manage', function() {
    return view ('manage');
});
