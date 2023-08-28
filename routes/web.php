<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//用戶管理
Route::resource('user', App\Http\Controllers\UserController::class);

Route::resource('customer', App\Http\Controllers\CustomerController::class);

Route::resource('department', App\Http\Controllers\DepartmentController::class);

Route::resource('job', App\Http\Controllers\JobController::class);
