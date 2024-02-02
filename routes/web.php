<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::prefix('/admin')->middleware(['auth:web', 'IsAdmin'])->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('root');
    Route::get('/edit_profile', [App\Http\Controllers\AdminController::class, 'edit_profile'])->name('admin.edit_profile');
    Route::post('/update_profile', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('admin.update_profile');
});
