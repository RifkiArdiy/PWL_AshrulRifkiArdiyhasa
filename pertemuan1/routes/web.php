<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'article']);

















// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/hello', function () {
//     return 'Hello';
// });
// Route::get('/world', function () {
//     return 'World';
// });


// Route::get('mahasiswa', function ($id) {
// });
// Route::post('mahasiswa', function ($id) {
// });
// Route::put('mahasiswa', function ($id) {
// });
// Route::delete('mahasiswa', function ($id) {
// });
// Route::get('mahasiswa/{id}', function ($id) {
// });
// Route::put('mahasiswa/{id}', function ($id) {
// });
// Route::delete('mahasiswa/{id}', function ($id) {
// });

// Route::match(['get', 'post'], '/specialUrl', function () {
// });
// Route::any('/specialMahasiswa', function ($id) {
// });


// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});


Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});


// Route Name...
Route::get('/user/profile', function () { })->name('profile');
// Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');

// Generating URLs...
// $url = route('profile');

// Generating Redirects...
// return redirect()->route('profile');

//Route Group dan Route Prefixes...
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

Route::get('/hello', [WelcomeController::class, 'index']);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);