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

Route::get('accueil', [Cad1EtudiantController::class, 'index'])->name('accueil');
Route::get('etudiant-create', [Cad1EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('etudiant-create', [Cad1EtudiantController::class, 'store']);
Route::get('etudiant/{cad1Etudiant}', [Cad1EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('etudiant-edit/{cad1Etudiant}', [Cad1EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{cad1Etudiant}', [Cad1EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('etudiant/{cad1Etudiant}', [Cad1EtudiantController::class, 'destroy'])->name('etudiant.delete');