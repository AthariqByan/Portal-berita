<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Models\Kategori;
use App\Models\News;

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

    $kategori = request('kategori');
    $newsQuery = News::query();

    if ($kategori) {
        $newsQuery->filterByKategori($kategori);
    }

    $news = $newsQuery->get();
    $kategoriList = Kategori::get();

    return view('landingpage/index', [
        'news' => $news,
        'kategori' => $kategoriList
    ]);
});

// Route untuk halaman detail berita bagi pengguna yang tidak login
Route::get('/news/{id}', [NewsController::class, 'showForGuest'])->name('news.showForGuest');

//route login dan register
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register_proses', [LoginController::class, 'register_proses'])->name('register_proses');

//Route untuk admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminController::class, 'showAdmin'])->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'showUsers'])->name('users.index');
    Route::resource('/news', NewsController::class);
    Route::resource('/kategoris', KategoriController::class);
});
//middleware admin
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('admin.profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
});
