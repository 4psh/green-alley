<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BidController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ImagesStyleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\StyleController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('index');
Route::view('/symlink', 'symlink')->name('symlink');
Route::get('/about', [PageController::class, 'about_index'])->name('about');
Route::get('/categories', [PageController::class, 'categories_index'])->name('categories');
Route::get('/categories/{category}', [PageController::class, 'services_index'])->name('services');
Route::get('/works', [PageController::class, 'works_index'])->name('works');
Route::get('/contacts', [PageController::class, 'contacts_index'])->name('contacts');
Route::get('/bids', [PageController::class, 'bid_index'])->name('bids');
Route::get('/styles', [PageController::class, 'styles_index'])->name('styles');
Route::get('/signin', [PageController::class, 'signin_index'])->name('signin');
Route::get('/reg', [PageController::class, 'register_index'])->name('reg');
Route::get('/work/{work}/image', [PageController::class, 'images_index'])->name('all-images');
Route::get('/work/{work}/style', [PageController::class, 'style_index'])->name('style');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('bid', \App\Http\Controllers\BidController::class)->only(['create', 'store']);

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('category', CategoryController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('work', WorkController::class);
    Route::resource('image', ImageController::class);
    Route::resource('bid', BidController::class)->only(['destroy', 'edit', 'update', 'index']);
    Route::resource('contact', ContactController::class);
    Route::resource('social', SocialController::class);
    Route::resource('about', AboutController::class);
    Route::resource('style', StyleController::class);
    Route::resource('img', ImagesStyleController::class);
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class);


    Route::get('/category/{category}/service/', [CategoryController::class, 'service_index'])->name('service.service_index');
    Route::get('/category/{category}/service/create', [CategoryController::class, 'service_create'])->name('service.service_create');
    Route::get('/work/{work}/image/', [WorkController::class, 'image_index'])->name('image.image_index');
    Route::get('/work/{work}/image/create', [WorkController::class, 'image_create'])->name('image.image_create');
    Route::get('/bid/done', [BidController::class, 'index'])->name('done_index');
    Route::get('/style/{style}/image/', [StyleController::class, 'image_index'])->name('style.image_index');
    Route::get('/style/{style}/image/create', [StyleController::class, 'image_create'])->name('style.image_create');
    Route::get('/work/{work}/style', [WorkController::class, 'style_index'])->name('style_index');


});
