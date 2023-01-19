<?php

namespace App\http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produits', [ProduitsController::class, "liste"]);
Route::get('/clients', [ClientController::class, "listeClient"]);
Route::get('/produits/{id}', [ProduitsController::class, "detail"]);
Route::post('/produits', [ProduitsController::class, "ajouter"]);
Route::get('/produits/{id}/{devise}', [ProduitsController::class, "devise"]);
Route::post('/commandes', [CommandeController::class, "ajouterCommande"]);
Route::get('/commandes/{id}', [CommandeController::class, "commandesClient"]);
Route::get('/commandes', [CommandeController::class, "listeCommande"]);
Route::get('/supprimercommandes/{id}', [CommandeController::class, "supprimerCommande"]);



