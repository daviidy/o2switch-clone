<?php

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])
    ->middleware('is_admin')
    ->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('login', [ App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
