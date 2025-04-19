<?php

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

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/studio', [PageController::class, 'studio'])->name('studio');
Route::get('/list-article', [PageController::class, 'listArticle'])->name('listArticle');
Route::get('/article', [PageController::class, 'article'])->name('article');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog-single', [PageController::class, 'blogSingle'])->name('blog.single');
Route::get('/portfolio-details', [PageController::class, 'portfolioDetails']);
Route::get('/404', [PageController::class, 'error404'])->name('error404');