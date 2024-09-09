<?php

use App\Http\Controllers\siswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    siswaController::class, 'index'
]);

Route::get('/tambah', function() {
    return view('addSiswa');
});

Route::patch('/tambah/store', [
    siswaController::class, 'store'
]);

Route::get('/edit/{id}', [siswaController::class, 'show']);
Route::patch('/edit/update/{id}', [siswaController::class, 'update']);


Route::delete('/delete/{id}', [
    siswaController::class, 'destroy'
]);