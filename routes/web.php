<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainpage;
use App\Http\Controllers\routes;
use App\Http\Controllers\langcontroller;

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

Route::get('/', [mainpage::class, 'render']);

Route::get('/who-we-are', [routes::class, 'whoareyou'])->name('whoweare');

Route::get('/our-panelist', [routes::class, 'ourpanelist'])->name('ourpanellist');

Route::get('/leaders', [routes::class, 'leaders'])->name('leaders');

Route::get('/news-events', [routes::class, 'newsevent'])->name('newsevents');

Route::get('/recentactivity', [routes::class, 'ouractivities'])->name('recentactivity');

Route::get('/photo-gallery', [routes::class, 'photogallery'])->name('photogallery');

Route::get('/training-development', [routes::class, 'traininganddev'])->name('traningdevroute');

Route::get('/fair-exhibition', [routes::class, 'fairexhibition'])->name('fairexhabition');

Route::get('/factory', [routes::class, 'factory'])->name('factory');

Route::get('/buyer', [routes::class, 'buyers'])->name('buyers');

Route::get('/blog', [routes::class, 'blog'])->name('blog');

Route::get('/contactus', [routes::class, 'contactus'])->name('contactus');

Route::get('/lang/{lang}', [langcontroller::class, 'lang'])->name('lang');

Route::get('/blog/card1', [routes::class, 'blogdetail'])->name('blogdetail');
Route::get('/blog/card2', [routes::class, 'blogdetail2'])->name('blogdetail2');