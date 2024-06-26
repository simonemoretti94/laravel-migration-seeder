<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/all', [PageController::class, 'alltrains'])->name('all');

Route::get('/country', [PageController::class, 'country'])->name('country');

Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/country/{id}', [PageController::class, 'countryFilter'])->name('country');

Route::get('/company/{id}', [PageController::class, 'companyFilter'])->name('company');
