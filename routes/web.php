<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/search', [SearchController::class, 'index'])->name('search');
