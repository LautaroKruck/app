<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Página de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Dashboard protegido
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Páginas públicas
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/suggestions', function () {
    return view('suggestions');
})->name('suggestions');

Route::get('/players/{id}', function ($id) {
    return view('player_details', ['id' => $id]);
})->name('player.details');

// Rutas de perfil agrupadas
Route::middleware(['auth'])->group(function () {
    // Página principal del perfil
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

    // Edición de perfil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Eliminación de cuenta
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ver sugerencias propias
    Route::get('/profile/my-suggestions', [ProfileController::class, 'mySuggestions'])->name('profile.suggestions');

    // Crear nueva sugerencia (formulario dentro de perfil, por ejemplo)
    Route::post('/suggestions', [ProfileController::class, 'storeSuggestion'])->name('suggestions.store');
});

require __DIR__.'/auth.php';
