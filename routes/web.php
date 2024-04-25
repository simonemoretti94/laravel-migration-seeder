<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [PageController::class , 'index'])->name('home');


Route::get('/all' , [PageController::class , 'alltrains'])->name('all');

Route::get('/country' , [PageController::class, 'country'])->name('country');

Route::get('/company' , [PageController::class , 'company'])->name('company');

Route::get('/contacts' , [PageController::class , 'contacts'])->name('contacts');