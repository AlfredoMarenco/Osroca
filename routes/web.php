<?php

use App\Http\Controllers\CasaController;
use App\Models\Casa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/almada', function () {
    $modelos = Casa::all();
    $desde = Casa::orderBy('price', 'asc')->first();
    return view('almada', compact('modelos','desde'));
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
})->name('violetaplus');

Route::resource('casas', CasaController::class)->names([
    'index' => 'casas.index',
    'edit' => 'casas.edit',
    'update' =>  'casas.update'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
