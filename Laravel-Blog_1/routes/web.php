<?php

use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*
Route::get('/', function () {
    return view('pages.index');
});
*/
/*Route::get('/pages', [app\Http\Controllers\pagesController::class, 'index']) -> name('pages')
*/

//To Home Page
Route::get('/', [pagescontroller::class, 'home'])-> name('home');

//To home About Page
Route::get('/about', [PagesController::class, 'about'])->name('about.us');

//To Home Contact Page
Route::get('/contact', [PagesController::class, 'contact'])-> name('contact');

//Resource for Posters
Route::resource('/blog', PostsController::class);


Auth::routes();

//Path to Admin Dashboard or user dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'redirect'])->name('dashboard');
