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
    return view('Guest.AboutCompany');
});

// Ganti ini hanya sementara 
// Savana 
Route::get('/savana-list', function () {
    return view('Guest.savanalist');
});

Route::get('/savana-type-50', function () {
    return view('Guest.savanadetail50');
});

Route::get('/savana-type-33', function () {
    return view('Guest.savanadetail33');
});

// Rajawali 
Route::get('/rajawali-list', function () {
    return view('Guest.rajawalilist');
});

Route::get('/rajawali-type-1', function () {
    return view('Guest.rajawalidetail1');
});

Route::get('/rajawali-type-2', function () {
    return view('Guest.rajawalidetail2');
});

Route::get('/mega-pesona-list', function () {
    return view('Guest.megapesonalist');
});

Route::get('/mega-pesona-type-1', function () {
    return view('Guest.pesonadetail1');
});

Route::get('/mega-pesona-type-2', function () {
    return view('Guest.pesonadetail2');
});


// Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/projectdetail', function () {
    return view('Guest.ProjectDetail');
});

Route::get('/listblog', function () {
    return view('Guest.ListBlog');
});

Route::get('/blogdetail', function () {
    return view('Guest.BlogDetail');
});

Route::get('/contact', function () {
    $categories = \App\Models\Category::all();
    return view('Guest.Contact', compact('categories'));
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
