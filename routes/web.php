<?php

use App\Http\Controllers\AboutEventController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/index', [AuthController::class, 'index'])->name('admin.index')->middleware(['auth']);

Route::get('/about/event', [AboutEventController::class, 'index'])->name('about.event');