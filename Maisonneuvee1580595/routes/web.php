<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\EtudiantController;

Route::get('/', [EtudiantController::class, 'index'])->name("info.index");
Route::get('etudiant/create', [EtudiantController::class, 'create'])->name("info.create");
Route::post('etudiant/create', [EtudiantController::class, 'store'])->name("info.store");
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name("info.show");
Route::get('etudiant/modifier/{etudiant}', [EtudiantController::class, 'edit'])->name("info.edit");
Route::put('etudiant/modifier/{etudiant}', [EtudiantController::class, 'update'])->name("info.update");
Route::delete('etudiant/{etudiant}', [EtudiantController::class, 'destroy'])->name("info.delete");
