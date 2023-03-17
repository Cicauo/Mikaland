<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// FrontEnd-Views
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-company', function () {
    return view('guest.about-company');
});

// Ganti ini hanya sementara 
// Savana 
Route::get('/savana-list', function () {
    return view('guest.savanalist');
});

Route::get('/savana-type-50', function () {
    return view('guest.savanadetail50');
});

Route::get('/savana-type-33', function () {
    return view('guest.savanadetail33');
});

// Rajawali 
Route::get('/rajawali-list', function () {
    return view('guest.rajawalilist');
});

Route::get('/rajawali-type-36', function () {
    return view('guest.rajawalidetail1');
});

Route::get('/rajawali-type-2', function () {
    return view('guest.rajawalidetail2');
});

Route::get('/mega-pesona-list', function () {
    return view('guest.megapesonalist');
});

Route::get('/mega-pesona-type-33', function () {
    return view('guest.pesonadetail1');
});

Route::get('/list-blog', function () {
    return view('guest.list-blog');
});

Route::get('/blog-detail', function () {
    return view('guest.blog-detail');
});

Route::get('/blog-detail-2', function () {
    return view('guest.blog-detail-2');
});

Route::get('/blog-detail-3', function () {
    return view('guest.blog-detail-3');
});

Route::get('/contact', function () {
    $categories = \App\Models\Category::all();
    return view('guest.contact');
});
//FrontEnd-View-End



//Dashboard-View-Start
Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    //Menu Kategori
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    // GET route untuk menampilkan form kategori
    Route::get('/category/category-new', [CategoryController::class, 'create'])->name('category.new');
    // POST route untuk menyimpan data kategori baru
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    // GET route untuk menampilkan form edit kategori
    Route::get('/category/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    // POST route untuk menyimpan data kategori yang telah diedit
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    // POST route untuk menghapus data kategori
    Route::post('/category/{category}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
    //Menampilkan kategori dinamis di navbar frontend

    //Contact
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


    //Menu User
    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
