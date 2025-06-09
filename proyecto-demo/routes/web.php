<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuggestionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página de bienvenida (pública)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Página de contacto (pública)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Detalles de jugador (pública)
Route::get('/players/{id}', function ($id) {
    return view('player_details', ['id' => $id]);
})->name('player.details');

// Dashboard protegido
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Perfil
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Listar sugerencias propias
    Route::get('/profile/suggestions', [SuggestionController::class, 'index'])->name('profile.suggestions');

    // Crear nueva sugerencia
    Route::get('/suggestions/create', [SuggestionController::class, 'create'])->name('suggestions.create');
    Route::post('/suggestions', [SuggestionController::class, 'store'])->name('suggestions.store');

    // Eliminar sugerencia
    Route::delete('/suggestions/{suggestion}', [SuggestionController::class, 'destroy'])->name('suggestions.destroy');
});

require __DIR__.'/auth.php';
