<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Middleware para autenticación
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ejemplo para web.php ---
Route::get('/categorias', [CategoriaController::class, 'index']);

// Nueva manera api.php ---
// Diferentes nombres | Convenciones que se deben seguir para automatizar
Route::apiResource('/categorias', CategoriaController::class);
