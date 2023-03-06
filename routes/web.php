<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ControllerContactUs;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ControllerNews;
use App\Http\Controllers\ControllerProduk;
use App\Http\Controllers\ControllerProgram;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
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

Route::prefix('produk')->group(function () {
    Route::get('/list', [ControllerProduk::class, 'produk']);
});

route::get('user/{id}',function($id){
   
    return 'user'.$id;
});

Route::prefix('program')->group(function () {
    Route::get('/list', [PageController::class, 'program']);
});

Route::get('/about', function (){
    echo "<a href='https://www.educastudio.com/about-us '>Tentang Kami</a>";
});
//Route::resource('contactUs', PageController::class);

Route::get('/hello',[WelcomeController::class, 'hello']
    //return View::make('hello', ['nama'=>'Tesya']);
    //return view('blog.hello', ['nama' => 'Asisah']);
    
);
Route::resource('index', PageController::class);

Route::get('/news',[ControllerNews::class, 'news']);

Route::get('/program',[ControllerProgram::class, 'program']);

Route::get('/aboutus',[AboutController::class,'aboutus']);

//Route::resource('index',[ControllerContactUs::class]);
Route::get('/',function(){
    return view('layouts.tamplate');
});
Route::get('/dashboard',[ControllerDashboard::class, 'index']);
Route::get('/profile',[ProfileController::class, 'index']);
Route::get('/kuliah',[KuliahController::class, 'index']);

Route::get('/kendaraan',[KendaraanController::class, 'index']);

