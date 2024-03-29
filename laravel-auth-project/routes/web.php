<?php

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
// Affiche le formulaire d'inscription
Route::get('register', [RegisterController::class, 'create']);




Route::get("login", [RegisterController::class, 'store']);

Route::get("reset-possword", function() {

});

// Route::get("forgot-possword", function() {

// });

// Route::get("forgot-possword", function() {

// });


