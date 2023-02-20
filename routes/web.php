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

//Praktikum 3
route::get('/home/{nama}',function($nama){
    echo "Selamat datang ";
    return $nama;
});

Route::prefix('product')->group(function () {
    Route::get('/list', [PageController::class, 'product']);
});

route::get('user/{id}',function($id){
    echo "Daftar Berita : <br>
    <ul>
    
    <li><a href='https://www.educastudio.com/news'>Berita 1</a></li>
    <li><a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19'>Berita 2</a></li>
    </ul>";
    return 'user'.$id;
});

Route::prefix('program')->group(function () {
    Route::get('/list', [PageController::class, 'program']);
});

Route::get('/about', function (){
    echo "<a href='https://www.educastudio.com/about-us '>Tentang Kami</a>";
});
Route::resource('contactUs', PageController::class);