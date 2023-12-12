<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);
Route::get('/services', [ServicesController::class,'index']);

Route::get('/{lang?}', function ($lang=null) {
    //$data = compact('lang');
    App::setLocale($lang);
    return view('/');
});

// Route::get('/demo/{name}/{id?}', function ($name,$id=null) {
//     $data = compact('name','id');
//     return view('demo')->with($data);
// });

// Route::post('/test', function () {
//     echo "Hello world!!";
// });

// Route::delete('/del', function () {
//     echo "Hello world!!";
// });
