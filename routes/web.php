<?php

use App\Http\Controllers\CasaController;
use App\Models\Casa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/almada', function () {
    $aguamarina = Casa::where('id','like',1)->get();
    $magenta = Casa::where('id','like',2)->get();
    $violeta = Casa::where('id','like',3)->get();
    $violetaplus = Casa::where('id','like',4)->get();
    return view('almada', compact('aguamarina','magenta','violeta','violetaplus'));
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
