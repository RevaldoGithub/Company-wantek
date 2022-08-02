<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBController;
use App\Http\Controllers\KategorigController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\FormcontactController;
use App\Http\Controllers\GallerysController;
use Illuminate\Auth\Events\Logout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware  group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('homepage.home.index');
// });

// Home Frontend
Route::resource('/', HomeController::class);
Route::resource('/abouts', AboutsController::class);
Route::resource('/services', ServicesController::class);
Route::resource('/testimonials', TestimonialsController::class);
Route::resource('/contactus', ContactusController::class);
Route::resource('/blogs', BlogsController::class);
Route::resource('/gallerys', GallerysController::class);

Route::resource('/dashboard', DashboardController::class)->middleware('auth');

// Aboutroute
Route::get('/about', 'App\Http\Controllers\AboutController@home')->name('admin.about')->middleware('auth');
Route::get('/about/edit/{id}', 'App\Http\Controllers\AboutController@edit')->name('about.edit')->middleware('auth');
Route::patch('/about/update/{id}', 'App\Http\Controllers\AboutController@update')->name('about.update')->middleware('auth');
// end Aboutroute


Route::resource('/slider', SliderController::class)->middleware('auth');

// service route
Route::resource('/service', ServiceController::class)->middleware('auth');
// Route::get('/service', 'App\Http\Controllers\ServiceController@index')->name('admin.service');
// Route::get('/service/create/{id}', 'App\Http\Controllers\ServiceController@create')->name('service.create');
// Route::get('/service/edit/{id}', 'App\Http\Controllers\ServiceController@edit')->name('service.edit');
// Route::patch('/service/update/{id}', 'App\Http\Controllers\ServiceController@update')->name('service.update');
// endd service route

// login
// Route::resource('/login', LoginController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);

// gallery
Route::resource('/galleris', GalleryController::class)->middleware('auth');

// testi
Route::resource('/testi', TestimonialController::class)->middleware('auth');

//blog
Route::resource('/blog', BlogController::class)->middleware('auth');

//contact
Route::resource('/contact', ContactController::class)->middleware('auth');
// formcontact
Route::resource('/formcontact', FormcontactController::class)->middleware('auth');

// kategori
Route::resource('/kategoriblog', KategoriBController::class)->middleware('auth');
Route::resource('/kategorigallery', KategorigController::class)->middleware('auth');
