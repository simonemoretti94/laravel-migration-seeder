<?php

use App\Http\Controllers\PageController;
use App\Models\Train;
use Illuminate\Support\Facades\Route;

Route::get('/' , [PageController::class , 'index'])->name('home');


Route::get('/all' , [PageController::class , 'alltrains'])->name('all');

Route::get('/country' , [PageController::class, 'country'])->name('country');

Route::get('/company' , [PageController::class , 'company'])->name('company');

Route::get('/contacts' , [PageController::class , 'contacts'])->name('contacts');