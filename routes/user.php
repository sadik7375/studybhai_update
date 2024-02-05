<?php

use App\Http\Controllers\v2\FrontController;
use Illuminate\Support\Facades\Route;

// ----------------------------------------- Front page -----------------------------------------

Route::get('/', [FrontController::class, 'front'])->name('front.home');

// ----------------------------------------- Front page -----------------------------------------
