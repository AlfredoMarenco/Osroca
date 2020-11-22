<?php

use App\Http\Controllers\CasaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('casas', CasaController::class)->names([
    'index' => 'casas.index'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('casas.index');
})->name('dashboard');
