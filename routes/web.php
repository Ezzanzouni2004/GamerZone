<?php

use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

// Dashboard (après connexion)
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Dashboard
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Organisateurs (création, édition, suppression tournois)
    Route::middleware('role:organizer,admin')->group(function () {
        Route::resource('tournaments', TournamentController::class)->except(['show']);
    });

    // Joueurs (voir tournois, s'inscrire)
    Route::middleware('role:player,organizer,admin')->group(function () {
        Route::get('tournaments', [TournamentController::class, 'index'])->name('tournaments.index');
        Route::get('tournaments/{tournament}', [TournamentController::class, 'show'])->name('tournaments.show');

        Route::resource('players', PlayerController::class)->only(['index', 'create', 'store']);
    });
});

