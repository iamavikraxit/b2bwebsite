<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

Route::get('dashboard', function () {
    return view('welcome');
});

Route::resource('permissions', App\Http\Controllers\PermissionsController::class);
Route::delete('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionsController::class, 'destroy'])->name('permissions.destroy');
// Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');
