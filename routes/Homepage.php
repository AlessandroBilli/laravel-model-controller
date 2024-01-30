<?php

use App\Http\Controllers\Guest\PageController;

// La rotta '/' visualizza la lista di film
Route::get('/movies', [PageController::class, 'movies'])->name('movies');

// La rotta '/homepage' visualizza la tua homepage personalizzata
Route::get('/homepage', [PageController::class, 'homepage'])->name('homepage');
