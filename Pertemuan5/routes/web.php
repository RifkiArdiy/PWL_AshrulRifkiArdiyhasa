<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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


// Route::get('/', [HomeController::class, 'index'])->name('home');


// Route::prefix('category')->group(function () {
//     Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('/home-care', [ProductController::class, 'homeCare']);
//     Route::get('/baby-kid', [ProductController::class, 'babyKid']);
// });

// Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('users.profile');

// Route::get('/sales', [SalesController::class, 'index'])->name('sales.pos');

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);


// ------------------------------------------ Jobsheet 4 ------------------------------------------
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::get('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::get('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);



// ------------------------------------------ Jobsheet 5 ------------------------------------------
// Route::get('/hello', function () {
//     return view('blog.hello', ['name' => 'Andi']);
// });

// Route::get('/hello', [WelcomeController::class, 'hello']);
// Route::get('/', [WelcomeController::class, 'index']);

// Route::get('/child', function () {
//     return view('child');
// });

// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);
// Route::resource('kategori', KategoriController::class);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);             // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);        // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);    // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);          // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);        // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
    Route::put("/{id}", [UserController::class, 'update']);       // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);  // menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);             // menampilkan halaman awal LevelController
    Route::post('/list', [LevelController::class, 'list']);        // menampilkan data LevelController dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);    // menampilkan halaman form tambah LevelController
    Route::post('/', [LevelController::class, 'store']);          // menyimpan data LevelController baru
    Route::get('/{id}', [LevelController::class, 'show']);        // menampilkan detail LevelController
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  // menampilkan halaman form edit LevelController
    Route::put("/{id}", [LevelController::class, 'update']);       // menyimpan perubahan data LevelController
    Route::delete('/{id}', [LevelController::class, 'destroy']);  // menghapus data LevelController
});
