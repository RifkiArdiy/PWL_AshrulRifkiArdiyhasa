<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;

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

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);             // menampilkan halaman awal KategoriController
    Route::post('/list', [KategoriController::class, 'list']);        // menampilkan data KategoriController dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);    // menampilkan halaman form tambah KategoriController
    Route::post('/', [KategoriController::class, 'store']);          // menyimpan data KategoriController baru
    Route::get('/{id}', [KategoriController::class, 'show']);        // menampilkan detail KategoriController
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // menampilkan halaman form edit KategoriController
    Route::put("/{id}", [KategoriController::class, 'update']);       // menyimpan perubahan data KategoriController
    Route::delete('/{id}', [KategoriController::class, 'destroy']);  // menghapus data KategoriController
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index']);             // menampilkan halaman awal SupplierController
    Route::post('/list', [SupplierController::class, 'list']);        // menampilkan data SupplierController dalam bentuk json untuk datatables
    Route::get('/create', [SupplierController::class, 'create']);    // menampilkan halaman form tambah SupplierController
    Route::post('/', [SupplierController::class, 'store']);          // menyimpan data SupplierController baru
    Route::get('/{id}', [SupplierController::class, 'show']);        // menampilkan detail SupplierController
    Route::get('/{id}/edit', [SupplierController::class, 'edit']);  // menampilkan halaman form edit SupplierController
    Route::put("/{id}", [SupplierController::class, 'update']);       // menyimpan perubahan data SupplierController
    Route::delete('/{id}', [SupplierController::class, 'destroy']);  // menghapus data SupplierController
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);             // menampilkan halaman awal BarangController
    Route::post('/list', [BarangController::class, 'list']);        // menampilkan data BarangController dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']);    // menampilkan halaman form tambah BarangController
    Route::post('/', [BarangController::class, 'store']);          // menyimpan data BarangController baru
    Route::get('/{id}', [BarangController::class, 'show']);        // menampilkan detail BarangController
    Route::get('/{id}/edit', [BarangController::class, 'edit']);  // menampilkan halaman form edit BarangController
    Route::put("/{id}", [BarangController::class, 'update']);       // menyimpan perubahan data BarangController
    Route::delete('/{id}', [BarangController::class, 'destroy']);  // menghapus data BarangController
});
