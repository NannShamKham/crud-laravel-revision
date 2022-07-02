<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//Route::redirect('/', 'article');
//
//Route::resource('article',\App\Http\Controllers\ArticleController::class);
//Route::get('/',[PostController::class,'index'])->name('post.index');
//Route::get('/create',[PostController::class,'create'])->name('post.create');
//Route::post('/create',[PostController::class,'store'])->name('post.store');
//Route::get('/show/{id}',[PostController::class,'show'])->name('post.show');
//Route::delete('/delete/{id}',[PostController::class,'delete'])->name('post.delete');
//Route::get('/edit/{id}',[PostController::class,'edit'])->name('post.edit');
//Route::put('/update/{id}',[PostController::class,'update'])->name('post.update');
Route::redirect('/','/post');
Route::resource('/post',\App\Http\Controllers\PostController2::class);

