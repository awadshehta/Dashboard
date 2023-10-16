<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});
Route::get('home',[MainController::class,'home'])->name('home');


// Admin Routes

Route::get('/admin', [AdminController::class, 'index'])->name('admin_home');
Route::get('/admin/add_department', [AdminController::class, 'add_department'])->name('add_department');
Route::post('/admin/save_department', [AdminController::class, 'save_department'])->name('save_department');
Route::get('admin/edit_department/{id}', [AdminController::class, 'edit_department'])->name('department_edit');
Route::post('admin/update_department/{id}', [AdminController::class, 'update_department'])->name('department_update');
Route::get('admin/delete_department/{id}', [AdminController::class, 'delete_department'])->name('department_delete');
