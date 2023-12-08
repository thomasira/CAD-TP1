<?php

use App\Http\Controllers\Cad1EtudiantController;
use App\Http\Controllers\Cad1VilleController;
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
});
Route::get('etudiants', [Cad1EtudiantController::class, 'index']);
Route::get('villes', [Cad1VilleController::class, 'index']);