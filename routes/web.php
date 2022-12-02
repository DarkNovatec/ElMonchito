<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'fnIndex'])-> name ('xIndex');
Route::get('detalle/{id}', [PagesController::class, 'fnEstDetalle'])-> name ('Estudiante.xDetalle');
Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero','[0-9]+')->name('xGaleria');
Route::get('/lista', [PagesController::class, 'fnLista'])-> name ('xLista');

Route::get('/', [PagesController::class, 'fnIndex'])-> name ('xIndex');

///////// ARRIBAa////
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});