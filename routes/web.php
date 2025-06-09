<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\AutoSuggestController::class, 'index'])->name('autosuggest.index');
Route::get('/autosuggest', [App\Http\Controllers\AutoSuggestController::class, 'index'])->name('autosuggest.index');
Route::get('/autosuggest/suggest', [App\Http\Controllers\AutoSuggestController::class, 'suggest'])->name('autosuggest.suggest');
