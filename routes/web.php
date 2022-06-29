<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AuthCheck;


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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/regsuccess', function () {
    return view('regsuccess');
});
Route::get('/upsuccess', function () {
    return view('upsuccess');
});
Route::get('/delsuccess', function () {
    return view('delsuccess');
});
Route::get('/registration', function () {
    return view('registration');
});

Route::get('/',[App\Http\Controllers\HomeController::class,'index']);
Route::post('registration',[App\Http\Controllers\HomeController::class,'store'])->name('store');
Route::post('/',[App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::post('/auth/check',[App\Http\Controllers\HomeController::class, 'check'])->name('auth.check');
Route::get('/auth/login',[App\Http\Controllers\HomeController::class, 'login'])->name('auth.login');
Route::get('/admin/dashboard',[App\Http\Controllers\HomeController::class, 'dashboard']);
Route::put('update',[App\Http\Controllers\HomeController::class,'update'])->name('update');

Route::put('dashboard', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');