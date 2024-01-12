<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\Admin\Auth\AdminController;
use App\Http\Controllers\Admin\SportAdminController;
use App\Http\Controllers\Admin\PassportController;
use App\Http\Controllers\FillialController;
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
// Route::controller(FillialController::class)->group(function(){
//     Route::get('filial', 'filials');
// });
Route::controller(SportAdminController::class)->group(function (){
    Route::get('/', 'index');
    Route::get('/admins', 'admins')->name('admins');
    Route::get('/users', 'users')->name('users');
});

Route::get('firebase-phone-authentication', [FirebaseController::class, 'index']);
Route::get('firebase-phone-authentication', [FirebaseController::class, 'index']);

Route::controller(AdminController::class)->group(function (){
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('auth.login');
    Route::get('/edit/{user}', 'edit')->name('auth.edit');
    Route::put('/update', 'update')->name('auth.update');
});

Route::get('logout', [AdminController::class, 'logout'])->name('auth.logout')->middleware('auth');
Route::post('register', [AdminController::class, 'create'])->name('auth.create')->middleware('auth');
Route::get('passport', [PassportController::class, 'passport'])->name('auth.passport')->middleware('auth');
Route::post('passport', [PassportController::class, 'store'])->name('auth.passport')->middleware('auth');

Route::redirect('/{something}', '/');
