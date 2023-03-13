<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
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
Route::get('/', function () {
    return view('Guest.Index');
});

Route::get('/about-company', function () {
    return view('Guest.AboutCompany');
});

Route::get('/listprojects', function () {
    return view('Guest.ListProjects');
});

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
    return view('Guest.Contact');
});
//FrontEnd-View-End

//Dashboard-View-Start
Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    //Menu Kategori
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.new');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

    //Contact
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    // Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.new');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


    //Menu User
    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
