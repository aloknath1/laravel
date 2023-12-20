<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use App\Models\Register;

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
//protected
Route::get('/register',[RegisterController::class,'index'])->middleware('guard');
Route::post('/register',[RegisterController::class,'register'])->middleware('guard');
Route::get('/register/delete/{id}',[RegisterController::class,'delete'])->name('customer.delete')->middleware('guard');
Route::get('/register/edit/{id}',[RegisterController::class,'edit'])->name('customer.edit')->middleware('guard');
Route::post('/register/update/{id}',[RegisterController::class,'update'])->name('customer.update')->middleware('guard');
Route::get('/register/view',[RegisterController::class,'view'])->name('customer.view')->middleware('guard');
//---------------
//Route::get('/register/trash',[RegisterController::class,'trash'])->name('customer.trash');
Route::get('/services', [ServicesController::class,'index']);

Route::get('/data', [IndexController::class,'index']);

// Route::get('/{lang?}', function ($lang=null) {
//     //$data = compact('lang');
//     App::setLocale($lang);
//     return view('/');
// });

// Route::get('/demo/{name}/{id?}', function ($name,$id=null) {
//     $data = compact('name','id');
//     return view('demo')->with($data);
// });

Route::get('/get-all-session', function () {
    $session = session()->all();
    dataFormat($session);
});

Route::get('/no-access', function () {
   echo 'no access page is called...';
   die;
});

Route::get('/set-session', function (Request $request) {
   $request->session()->put('user_name', 'admin');
   $request->session()->put('user_id', '123');
   $request->session()->flash('status', 'success');
   return redirect('get-all-session');
});

Route::get('/destroy-session', function () {
    session()->forget('user_name');
    session()->forget('user_id');
    return redirect('get-all-session');
 });