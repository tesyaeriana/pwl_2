<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

//Route::get('/', function () {
//return view('welcome');
//});
//Praktikum 1
Route::get('/', function (){
    echo "Selamat Datang";
});
Route::get('/about', function (){
    echo "NIM:2141720024 Nama:Tesya Eriana";
});
Route::get('/articles/{id}', function ($id){
  echo "Halaman Artikel dengan ID";
  return $id;
});

//Praktikum 2

route::get('/',[PageController::class, 'index']);

route::get('/about',[PageController::class, 'about']);

route::get('/articles/{id}',[PageController::class, 'articles']);

//No3
route::get('/',[HomeController::class, 'index']);

route::get('/',[AboutController::class, 'index']);

route::get('/',[ArticleController::class, 'index']);

