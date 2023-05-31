<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frasesController;

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

// Route::get('/', function () {
//     return view('plantilla');
// });

Route::get('/frases',[frasesController::class,'index'])->name('getFrases');
Route::get('/form',[frasesController::class,'getForm']);

//creando la ruta para el metodo store
Route::post('/saveFrase',[frasesController::class,'store'])->name('save');

Route::match(['get','post'],'/editFrase/{id_palabras}',[frasesController::class,'edit'])->name('edit');