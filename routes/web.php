<?php

use App\Http\Controllers\CasaController;
use App\Models\Casa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('desarrollos/almada', function () {
    $modelos = Casa::all();
    return view('almada',compact('modelos'));
})->name('almada');

Route::get('desarrollos/violeta', function () {
    return view('violeta');
})->name('violeta');

Route::resource('casas', CasaController::class)->names([
    'index' => 'casas.index',
    'edit' => 'casas.edit',
    'update' =>  'casas.update'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
