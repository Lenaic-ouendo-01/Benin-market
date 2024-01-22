<?php

use App\Http\Controllers\MarcheController;
use App\Models\Ville;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/marche', function () {
    $villes = Ville::all();
    return view('create', compact('villes'));
})->name('marche');
Route::post('/marche/store', [MarcheController::class, 'store'])->name('marche.store');
Route::get('/marche/list', [MarcheController::class, 'index'])->name('marche.liste');
