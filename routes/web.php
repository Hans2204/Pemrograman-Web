<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('detail/{rent:slug}', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('pesan/{rent:slug}', [\App\Http\Controllers\HomeController::class, 'pesan'])->name('pesan');
Route::post('pinjam', [\App\Http\Controllers\HomeController::class, 'store']);

Route::group(['middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/sewa', \App\Http\Controllers\Admin\SewaController::class);
    Route::resource('/pesan', \App\Http\Controllers\Admin\PesanController::class);
    Route::put('/sewa/update-image/{id}', [\App\Http\Controllers\Admin\SewaController::class, 'updateImage'])->name('sewa.updateImage');
});


Auth::routes(['register' => false]);

