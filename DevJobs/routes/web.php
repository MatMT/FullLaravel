<?php

use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacanteController;
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

Route::get('/', HomeController::class)->name('home');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [VacanteController::class, 'index'])->middleware(['rol.reclutador'])->name('vacantes.index');
    Route::get('/vacantes/create', [VacanteController::class, 'create'])->name('vacantes.create');
    Route::get('/vacantes/{vacante}/edit', [VacanteController::class, 'edit'])->name('vacantes.edit');
    // Notificaciones
    Route::get('/notificaciones', NotificacionController::class)->middleware(['rol.reclutador'])->name('notificaciones');

    // Reclutadores
    Route::get('/candidatos/{vacante}', [CandidatosController::class, 'index'])->name('candidatos.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/vacantes/{vacante}', [VacanteController::class, 'show'])->name('vacantes.show');


require __DIR__ . '/auth.php';
