<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermodinamicaController;
use App\Http\Controllers\SoundController;
use App\Http\Controllers\EnergyController;
use App\Http\Controllers\ForceController;
use App\Http\Controllers\PendularController;
use App\Http\Controllers\ParabolController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/termodinamica', [TermodinamicaController::class, 'index'])->name('termodinamica');
Route::get('/fuerza', [ForceController::class, 'index'])->name('fuerza');
Route::get('/energia', [EnergyController::class, 'index'])->name('energia');
Route::get('/pendulo', [PendularController::class, 'index'])->name('pendulo');
Route::get('/parabolico', [ParabolController::class, 'index'])->name('parabolico');
Route::get('sonido', [SoundController::class, 'index'])->name('sonido');
