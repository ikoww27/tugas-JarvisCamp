<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/**
 * HTTP Method:
 * 1. Get: untuk menampilkan sesuatu
 * 2. Post: Untuk menambahkan data
 * 3. Put: untuk mengubah data
 * 4. Delete; untuk menghapus data
 */

// Rute untuk menampilkan halaman daftar tugas
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Rute untuk menampilkan halaman detail tugas
Route::get('/tasks/{id}', [TaskController::class, 'detail'])->name('task.detail');
