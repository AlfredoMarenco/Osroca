<?php

use App\Http\Controllers\CasaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

<<<<<<< HEAD
=======
Route::get('/almada', function () {
    return view('almada');
});

>>>>>>> Frontend
Route::resource('casas', CasaController::class)->names([
    'index' => 'casas.index',
    'edit' => 'casas.edit',
    'update' =>  'casas.update'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
