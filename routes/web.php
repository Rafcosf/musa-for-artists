<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\AlbumMostraController;
Route ::resource('/',WelcomeController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  
});
  Route::get('/album', [AlbumController::class, 'index'])->name('album');
  Route::get('/musica', [MusicaController::class, 'index'])->name('musica');
  Route::get('/mostraalbum', [AlbumMostraController::class, 'index'])->name('mostraalbum');
  Route::get('/conta', [ContaController::class, 'index'])->name('conta');