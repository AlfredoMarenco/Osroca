<?php

use App\Http\Controllers\CasaController;
use App\Http\Controllers\EmailController;
use App\Mail\Leads;
use App\Models\Casa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $desdeAlmada = Casa::where('developing','like','almada')->orderBy('price', 'asc')->first();
    $desdeMiraverde = Casa::where('developing','like','miraverde')->orderBy('price', 'asc')->first();
    return view('index',compact('desdeAlmada','desdeMiraverde'));
})->name('index');

Route::get('/almada', function () {
    $modelos = Casa::all();
    $desde = Casa::where('developing','like','almada')->orderBy('price', 'asc')->first();
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

// RUTAS MIRAVERDE
Route::get('/miraverde', function () {
    $modelos = Casa::all();
    $desde = Casa::where('developing','like','miraverde')->orderBy('price', 'asc')->first();
    return view('miraverde.miraverde', compact('modelos','desde'));
})->name('miraverde');

Route::get('/modelo-balche', function () {
    return view('miraverde.balche');
})->name('balche');

Route::get('/modelo-bugambilia', function () {
    return view('miraverde.bugambilia');
})->name('bugambilia');

Route::get('/modelo-flamboyan', function () {
    return view('miraverde.flamboyan');
})->name('flamboyan');

Route::get('/modelo-ceiba', function () {
    return view('miraverde.ceiba');
})->name('ceiba');


Route::get('/mailable', function () {
    return new Leads('Balche','Alfredo Gonzalez Marenco', 'ripmarenko@gmail.com','9993629936','No cuento con presupuesto','Infonavit','whatsapp');
});


Route::post('/sendMails',[EmailController::class,'sendEmail'])->name('email.send');
