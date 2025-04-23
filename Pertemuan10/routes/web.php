<?php

use App\Http\Controllers\AuthController;
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

// Route::group(['prefix' => 'user'], function () {
//     Route::get('/', [UserController::class, 'index']);             // menampilkan halaman awal user
//     Route::post('/list', [UserController::class, 'list']);        // menampilkan data user dalam bentuk json untuk datatables
//     Route::get('/create', [UserController::class, 'create']);    // menampilkan halaman form tambah user
//     Route::post('/', [UserController::class, 'store']);          // menyimpan data user baru
//     Route::get('/{id}', [UserController::class, 'show']);        // menampilkan detail user
//     Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
//     Route::put("/{id}", [UserController::class, 'update']);       // menyimpan perubahan data user
//     Route::delete('/{id}', [UserController::class, 'destroy']);  // menghapus data user
// });

// Route::group(['prefix' => 'level'], function () {
//     Route::get('/', [LevelController::class, 'index']);             // menampilkan halaman awal LevelController
//     Route::post('/list', [LevelController::class, 'list']);        // menampilkan data LevelController dalam bentuk json untuk datatables
//     Route::get('/create', [LevelController::class, 'create']);    // menampilkan halaman form tambah LevelController
//     Route::post('/', [LevelController::class, 'store']);          // menyimpan data LevelController baru
//     Route::get('/{id}', [LevelController::class, 'show']);        // menampilkan detail LevelController
//     Route::get('/{id}/edit', [LevelController::class, 'edit']);  // menampilkan halaman form edit LevelController
//     Route::put("/{id}", [LevelController::class, 'update']);       // menyimpan perubahan data LevelController
//     Route::delete('/{id}', [LevelController::class, 'destroy']);  // menghapus data LevelController
// });

// Route::group(['prefix' => 'kategori'], function () {
//     Route::get('/', [KategoriController::class, 'index']);             // menampilkan halaman awal KategoriController
//     Route::post('/list', [KategoriController::class, 'list']);        // menampilkan data KategoriController dalam bentuk json untuk datatables
//     Route::get('/create', [KategoriController::class, 'create']);    // menampilkan halaman form tambah KategoriController
//     Route::post('/', [KategoriController::class, 'store']);          // menyimpan data KategoriController baru
//     Route::get('/{id}', [KategoriController::class, 'show']);        // menampilkan detail KategoriController
//     Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // menampilkan halaman form edit KategoriController
//     Route::put("/{id}", [KategoriController::class, 'update']);       // menyimpan perubahan data KategoriController
//     Route::delete('/{id}', [KategoriController::class, 'destroy']);  // menghapus data KategoriController
// });

// Route::group(['prefix' => 'supplier'], function () {
//     Route::get('/', [SupplierController::class, 'index']);             // menampilkan halaman awal SupplierController
//     Route::post('/list', [SupplierController::class, 'list']);        // menampilkan data SupplierController dalam bentuk json untuk datatables
//     Route::get('/create', [SupplierController::class, 'create']);    // menampilkan halaman form tambah SupplierController
//     Route::post('/', [SupplierController::class, 'store']);          // menyimpan data SupplierController baru
//     Route::get('/{id}', [SupplierController::class, 'show']);        // menampilkan detail SupplierController
//     Route::get('/{id}/edit', [SupplierController::class, 'edit']);  // menampilkan halaman form edit SupplierController
//     Route::put("/{id}", [SupplierController::class, 'update']);       // menyimpan perubahan data SupplierController
//     Route::delete('/{id}', [SupplierController::class, 'destroy']);  // menghapus data SupplierController
// });

// Route::group(['prefix' => 'barang'], function () {
//     Route::get('/', [BarangController::class, 'index']);             // menampilkan halaman awal BarangController
//     Route::post('/list', [BarangController::class, 'list']);        // menampilkan data BarangController dalam bentuk json untuk datatables
//     Route::get('/create', [BarangController::class, 'create']);    // menampilkan halaman form tambah BarangController
//     Route::post('/', [BarangController::class, 'store']);          // menyimpan data BarangController baru
//     Route::get('/{id}', [BarangController::class, 'show']);        // menampilkan detail BarangController
//     Route::get('/{id}/edit', [BarangController::class, 'edit']);  // menampilkan halaman form edit BarangController
//     Route::put("/{id}", [BarangController::class, 'update']);       // menyimpan perubahan data BarangController
//     Route::delete('/{id}', [BarangController::class, 'destroy']);  // menghapus data BarangController
// });


// ------------------------------------------ Jobsheet 6 ------------------------------------------


// Route::group(['prefix' => 'user'], function () {
//     Route::get('/', [UserController::class, 'index']);             // menampilkan halaman awal user
//     Route::post('/list', [UserController::class, 'list']);        // menampilkan data user dalam bentuk json untuk datatables
//     Route::get('/create', [UserController::class, 'create']);    // menampilkan halaman form tambah user
//     Route::post('/', [UserController::class, 'store']);          // menyimpan data user baru
//     Route::get('/create_ajax', [UserController::class, 'create_ajax']);    // menampilkan halaman form tambah user
//     Route::post('/ajax', [UserController::class, 'store_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}', [UserController::class, 'show']);        // menampilkan detail user
//     Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
//     Route::put("/{id}", [UserController::class, 'update']);       // menyimpan perubahan data user
//     Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);    // menampilkan halaman form tambah user
//     Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);  // menghapus data user
//     Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);  // menghapus data user
//     Route::delete('/{id}', [UserController::class, 'destroy']);  // menghapus data user
// });

// Route::group(['prefix' => 'level'], function () {
//     Route::get('/', [LevelController::class, 'index']);             // menampilkan halaman awal LevelController
//     Route::post('/list', [LevelController::class, 'list']);        // menampilkan data LevelController dalam bentuk json untuk datatables
//     Route::get('/create', [LevelController::class, 'create']);    // menampilkan halaman form tambah LevelController
//     Route::post('/', [LevelController::class, 'store']);          // menyimpan data LevelController baru
//     Route::get('/create_ajax', [LevelController::class, 'create_ajax']);    // menampilkan halaman form tambah user
//     Route::post('/ajax', [LevelController::class, 'store_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}', [LevelController::class, 'show']);        // menampilkan detail LevelController
//     Route::get('/{id}/edit', [LevelController::class, 'edit']);  // menampilkan halaman form edit LevelController
//     Route::put("/{id}", [LevelController::class, 'update']);       // menyimpan perubahan data LevelController
//     Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);    // menampilkan halaman form tambah user
//     Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);  // menghapus data user
//     Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);  // menghapus data user
//     Route::delete('/{id}', [LevelController::class, 'destroy']);  // menghapus data LevelController
// });

// Route::group(['prefix' => 'kategori'], function () {
//     Route::get('/', [KategoriController::class, 'index']);             // menampilkan halaman awal KategoriController
//     Route::post('/list', [KategoriController::class, 'list']);        // menampilkan data KategoriController dalam bentuk json untuk datatables
//     Route::get('/create', [KategoriController::class, 'create']);    // menampilkan halaman form tambah KategoriController
//     Route::post('/', [KategoriController::class, 'store']);          // menyimpan data KategoriController baru
//     Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);    // menampilkan halaman form tambah user
//     Route::post('/ajax', [KategoriController::class, 'store_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}', [KategoriController::class, 'show']);        // menampilkan detail KategoriController
//     Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // menampilkan halaman form edit KategoriController
//     Route::put("/{id}", [KategoriController::class, 'update']);       // menyimpan perubahan data KategoriController
//     Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);    // menampilkan halaman form tambah user
//     Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);  // menghapus data user
//     Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);  // menghapus data user
//     Route::delete('/{id}', [KategoriController::class, 'destroy']);  // menghapus data KategoriController
// });

// Route::group(['prefix' => 'supplier'], function () {
//     Route::get('/', [SupplierController::class, 'index']);             // menampilkan halaman awal SupplierController
//     Route::post('/list', [SupplierController::class, 'list']);        // menampilkan data SupplierController dalam bentuk json untuk datatables
//     Route::get('/create', [SupplierController::class, 'create']);    // menampilkan halaman form tambah SupplierController
//     Route::post('/', [SupplierController::class, 'store']);          // menyimpan data SupplierController baru
//     Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);    // menampilkan halaman form tambah user
//     Route::post('/ajax', [SupplierController::class, 'store_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}', [SupplierController::class, 'show']);        // menampilkan detail SupplierController
//     Route::get('/{id}/edit', [SupplierController::class, 'edit']);  // menampilkan halaman form edit SupplierController
//     Route::put("/{id}", [SupplierController::class, 'update']);       // menyimpan perubahan data SupplierController
//     Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);    // menampilkan halaman form tambah user
//     Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);  // menghapus data user
//     Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);  // menghapus data user
//     Route::delete('/{id}', [SupplierController::class, 'destroy']);  // menghapus data SupplierController
// });

// Route::group(['prefix' => 'barang'], function () {
//     Route::get('/', [BarangController::class, 'index']);             // menampilkan halaman awal BarangController
//     Route::post('/list', [BarangController::class, 'list']);        // menampilkan data BarangController dalam bentuk json untuk datatables
//     Route::get('/create', [BarangController::class, 'create']);    // menampilkan halaman form tambah BarangController
//     Route::post('/', [BarangController::class, 'store']);          // menyimpan data BarangController baru
//     Route::get('/create_ajax', [BarangController::class, 'create_ajax']);    // menampilkan halaman form tambah user
//     Route::post('/ajax', [BarangController::class, 'store_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}', [BarangController::class, 'show']);        // menampilkan detail BarangController
//     Route::get('/{id}/edit', [BarangController::class, 'edit']);  // menampilkan halaman form edit BarangController
//     Route::put("/{id}", [BarangController::class, 'update']);       // menyimpan perubahan data BarangController
//     Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);    // menampilkan halaman form tambah user
//     Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);  // menghapus data user
//     Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);  // menghapus data user
//     Route::delete('/{id}', [BarangController::class, 'destroy']);  // menghapus data BarangController
// });

// ------------------------------------------ Jobsheet 7 ------------------------------------------

Route::pattern('id', '[0-9]+'); // artinya ketika ada parameter (id), maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'post_register']);

// Route::middleware(['auth'])->group(function () { // artinya semua route di dalam group ini harus login dulu

//     // masukkan semua route yang perlu autentikasi di sini
//     Route::group(['prefix' => 'barang'], function () {
//     Route::get('/', [BarangController::class, 'index']);             // menampilkan halaman awal BarangController
//     Route::post('/list', [BarangController::class, 'list']);        // menampilkan data BarangController dalam bentuk json untuk datatables
//     Route::get('/create', [BarangController::class, 'create']);    // menampilkan halaman form tambah BarangController
//     Route::post('/', [BarangController::class, 'store']);          // menyimpan data BarangController baru
//     Route::get('/create_ajax', [BarangController::class, 'create_ajax']);    // menampilkan halaman form tambah user
//     Route::post('/ajax', [BarangController::class, 'store_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}', [BarangController::class, 'show']);        // menampilkan detail BarangController
//     Route::get('/{id}/edit', [BarangController::class, 'edit']);  // menampilkan halaman form edit BarangController
//     Route::put("/{id}", [BarangController::class, 'update']);       // menyimpan perubahan data BarangController
//     Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);    // menampilkan halaman form tambah user
//     Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);    // menampilkan halaman form tambah user
//     Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);  // menghapus data user
//     Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);  // menghapus data user
//     Route::delete('/{id}', [BarangController::class, 'destroy']);  // menghapus data BarangController
// });

Route::middleware(['auth'])->group(function () { // artinya semua route di dalam group ini harus login dulu
    // masukkan semua route yang perlu autentikasi di sini
    Route::get('/', [WelcomeController::class, 'index']);

    Route::middleware(['authorize:ADM'])->group(function(){ // artinya semua route di dalam group ini harus punya role ADM (Administrator)
        Route::group(['prefix' => 'level'], function () {
            Route::get('/', [LevelController::class, 'index']);
            Route::post('/list', [LevelController::class, 'list']);
            Route::get('/create', [LevelController::class, 'create']);
            Route::post("/", [LevelController::class, 'store']);
            Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
            Route::post('/ajax', [LevelController::class, 'store_ajax']);
            Route::get('/{id}', [LevelController::class, 'show']);
            Route::get('/{id}/edit', [LevelController::class, 'edit']);
            Route::put("/{id}", [LevelController::class, 'update']);
            Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
            Route::get('/{id}/show_ajax', [LevelController::class, 'show_ajax']);
            Route::delete('/{id}', [LevelController::class, 'destroy']);
            Route::get('/import', [LevelController::class, 'import']);
            Route::post('/import_ajax', [LevelController::class, 'import_ajax']);
            Route::get('/export_excel', [LevelController::class, 'export_excel']);
            Route::get('/export_pdf', [LevelController::class, 'export_pdf']);
        });
    });


    Route::middleware(['authorize:ADM,MNG,STF'])->group(function(){ // artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager) dan STF (Staff)
        Route::group(['prefix' => 'barang'], function () {
            Route::get('/', [BarangController::class, 'index']);
            Route::post('/list', [BarangController::class, 'list']);
            Route::get('/create', [BarangController::class, 'create']);
            Route::post("/", [BarangController::class, 'store']);
            Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
            Route::post('/ajax', [BarangController::class, 'store_ajax']);
            Route::get('/{id}', [BarangController::class, 'show']);
            Route::get('/{id}/edit', [BarangController::class, 'edit']);
            Route::put("/{id}", [BarangController::class, 'update']);
            Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
            Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax']);
            Route::delete('/{id}', [BarangController::class, 'destroy']);
            Route::get('/import', [BarangController::class, 'import']);
            Route::post('/import_ajax', [BarangController::class, 'import_ajax']);
            Route::get('/export_excel', [BarangController::class, 'export_excel']);
            Route::get('/export_pdf', [BarangController::class, 'export_pdf']);
        });
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/profile', [UserController::class, 'profile']);
        Route::get('/profile_ajax', [UserController::class, 'profile_ajax']);
        Route::post('/profile_update', [UserController::class, 'profile_update']);
        
        Route::middleware(['authorize:ADM'])->group(function(){ // artinya semua route di dalam group ini harus punya role ADM (Administrator)
            Route::get('/', [UserController::class, 'index']);             // menampilkan halaman awal user
            Route::post('/list', [UserController::class, 'list']);        // menampilkan data user dalam bentuk json untuk datatables
            Route::get('/create', [UserController::class, 'create']);    // menampilkan halaman form tambah user
            Route::post("/", [UserController::class, 'store']);          // menyimpan data user baru
            Route::get('/create_ajax', [UserController::class, 'create_ajax']); // Menampilkan halaman form tambah user ajax
            Route::post('/ajax', [UserController::class, 'store_ajax']); // menyimpan data user baru ajax
            Route::get('/{id}', [UserController::class, 'show']);        // menampilkan detail user
            Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
            Route::put("/{id}", [UserController::class, 'update']);       // menyimpan perubahan data user
            Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // menampilkan halaman form edit user Ajax
            Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // menyimpan perubahan data user Ajax
            Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete user Ajax
            Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // Untuk hapus data user Ajax
            Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']); // untuk menampilkan detail
            Route::delete('/{id}', [UserController::class, 'destroy']);  // menghapus data user
            Route::get('/import', [UserController::class, 'import']);
            Route::post('/import_ajax', [UserController::class, 'import_ajax']);
            Route::get('/export_excel', [UserController::class, 'export_excel']);
            Route::get('/export_pdf', [UserController::class, 'export_pdf']);
        });
    });

    Route::middleware(['authorize:ADM,MNG'])->group(function(){
        Route::group(['prefix' => 'supplier'], function () {
            Route::get('/', [SupplierController::class, 'index']);
            Route::post('/list', [SupplierController::class, 'list']);
            Route::get('/create', [SupplierController::class, 'create']);
            Route::post("/", [SupplierController::class, 'store']);
            Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
            Route::post('/ajax', [SupplierController::class, 'store_ajax']);
            Route::get('/{id}', [SupplierController::class, 'show']);
            Route::get('/{id}/edit', [SupplierController::class, 'edit']);
            Route::put("/{id}", [SupplierController::class, 'update']);
            Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
            Route::get('/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
            Route::delete('/{id}', [SupplierController::class, 'destroy']);
            Route::get('/import', [SupplierController::class, 'import']);
            Route::post('/import_ajax', [SupplierController::class, 'import_ajax']);
            Route::get('/export_excel', [SupplierController::class, 'export_excel']);
            Route::get('/export_pdf', [SupplierController::class, 'export_pdf']);
        });
    });

    Route::middleware(['authorize:ADM,MNG'])->group(function(){ // artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager)
        Route::group(['prefix' => 'kategori'], function () {
            Route::get('/', [KategoriController::class, 'index']);
            Route::post('/list', [KategoriController::class, 'list']);
            Route::get('/create', [KategoriController::class, 'create']);
            Route::post("/", [KategoriController::class, 'store']);
            Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
            Route::post('/ajax', [KategoriController::class, 'store_ajax']);
            Route::get('/{id}', [KategoriController::class, 'show']);
            Route::get('/{id}/edit', [KategoriController::class, 'edit']);
            Route::put("/{id}", [KategoriController::class, 'update']);
            Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
            Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
            Route::delete('/{id}', [KategoriController::class, 'destroy']);
            Route::get('/import', [KategoriController::class, 'import']);
            Route::post('/import_ajax', [KategoriController::class, 'import_ajax']);
            Route::get('/export_excel', [KategoriController::class, 'export_excel']);
            Route::get('/export_pdf', [KategoriController::class, 'export_pdf']);
        });
    });

    // Route::middleware(['authorize:ADM,MNG,STF'])->group(function(){ // artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager) dan STF (Staff)
    //     Route::group(['prefix' => 'stok'], function () {
    //         Route::get('/', [StokController::class, 'index']);
    //         Route::post('/list', [StokController::class, 'list']);
    //         Route::get('/create', [StokController::class, 'create']);
    //         Route::post("/", [StokController::class, 'store']);
    //         Route::get('/create_ajax', [StokController::class, 'create_ajax']);
    //         Route::post('/ajax', [StokController::class, 'store_ajax']);
    //         Route::get('/{id}', [StokController::class, 'show']);
    //         Route::get('/{id}/edit', [StokController::class, 'edit']);
    //         Route::put("/{id}", [StokController::class, 'update']);
    //         Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
    //         Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);
    //         Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
    //         Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
    //         Route::get('/{id}/show_ajax', [StokController::class, 'show_ajax']);
    //         Route::delete('/{id}', [StokController::class, 'destroy']);
    //         Route::get('/import', [StokController::class, 'import']);
    //         Route::post('/import_ajax', [StokController::class, 'import_ajax']);
    //         Route::get('/export_excel', [StokController::class, 'export_excel']);
    //         Route::get('/export_pdf', [StokController::class, 'export_pdf']);
    //     });
    // });

    // Route::middleware(['authorize:ADM,MNG,STF'])->group(function(){ // artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager) dan STF (Staff)
    //     Route::group(['prefix' => 'penjualan'], function () {
    //         Route::get('/', [PenjualanController::class, 'index']);
    //         Route::post('/list', [PenjualanController::class, 'list']);
    //         Route::get('/create', [PenjualanController::class, 'create']);
    //         Route::post("/", [PenjualanController::class, 'store']);
    //         Route::get('/create_ajax', [PenjualanController::class, 'create_ajax']);
    //         Route::post('/ajax', [PenjualanController::class, 'store_ajax']);
    //         Route::get('/{id}', [PenjualanController::class, 'show']);
    //         Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
    //         Route::put("/{id}", [PenjualanController::class, 'update']);
    //         Route::get('/{id}/edit_ajax', [PenjualanController::class, 'edit_ajax']);
    //         Route::put('/{id}/update_ajax', [PenjualanController::class, 'update_ajax']);
    //         Route::get('/{id}/delete_ajax', [PenjualanController::class, 'confirm_ajax']);
    //         Route::delete('/{id}/delete_ajax', [PenjualanController::class, 'delete_ajax']);
    //         Route::get('/{id}/show_ajax', [PenjualanController::class, 'show_ajax']);
    //         Route::delete('/{id}', [PenjualanController::class, 'destroy']);
    //     });
    // });
});
