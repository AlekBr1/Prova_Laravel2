<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Home::class, 'Home'])->name('site.home');
Route::get('/shopping', [\App\Http\Controllers\Shopping::class, 'Shopping'])->name('site.shopping');
Route::get('/shopping', [\App\Http\Controllers\Shopping::class, 'showGames'])->name('site.shopping');
Route::get('/addgame', [\App\Http\Controllers\addgame::class, 'AddGame'])->name('site.addgame');
Route::post('/addgame', [\App\Http\Controllers\addgame::class, 'savegame'])->name('site.addgame');
Route::get('/contato', [\App\Http\Controllers\Contato::class, 'Contato'])->name('site.contato');



