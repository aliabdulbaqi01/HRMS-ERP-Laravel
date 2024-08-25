<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(['middleware' => ['guest:admin']], function () {
   Route::get('/login', [LoginController::class, 'index'])->name('admin.login.index');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
});
// authenticated pages
Route::group(['middleware' => ['auth:admin']], function () {
   Route::get('/',[DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout',[LoginController::class, 'logout'])->name('admin.logout');
});

Route::fallback(function(){
    return redirect()->route('admin.dashboard');
});




