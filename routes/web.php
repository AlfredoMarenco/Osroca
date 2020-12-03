<?php

use App\Http\Controllers\CasaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/almada', function () {
    return view('almada');
})->name('almada');

Route::get('/modelo-aguamarina', function () {
    return view('aguamarina');
});
Route::get('/modelo-magenta', function () {
    return view('magenta');
});

Route::get('/modelo-violeta', function () {
    return view('violeta');
});

Route::get('/modelo-violeta-plus', function () {
    return view('violeta-plus');
});

Route::resource('casas', CasaController::class)->names([
    'index' => 'casas.index',
    'edit' => 'casas.edit',
    'update' =>  'casas.update'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
