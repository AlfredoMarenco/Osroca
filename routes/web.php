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
})->name('aguamarina');

Route::get('/modelo-magenta', function () {
    return view('magenta');
})->name('magenta');

Route::get('/modelo-violeta', function () {
    return view('violeta');
})->name('violeta');

Route::get('/modelo-violeta-plus', function () {
    return view('violeta-plus');
})->name('violeta-plus');

Route::resource('casas', CasaController::class)->names([
    'index' => 'casas.index',
    'edit' => 'casas.edit',
    'update' =>  'casas.update'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
