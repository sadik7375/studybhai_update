<?php

use App\Http\Controllers\v2\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageControllerController;
use Illuminate\Support\Facades\Route;

// ----------------------------------------- Front page -----------------------------------------


//----------------------------------home page route---------------------------------

Route::get('/', [FrontController::class, 'front'])->name('index-page');

//----------------------------------courses page route---------------------------------

Route::get('/showcourses', [FrontController::class, 'showcourses'])->name('show.courses');


//----------------------------------single course details page route---------------------------------

Route::get('course-info/{id}', [FrontController::class, 'course_info'])->name('single_course_info');



// ------------------------------------------ Team show Route ------------------------------------------

Route::get('team', [FrontController::class, 'team'])->name('team_info');



//------------------------------------------  Gallery   -----------------------------------------

Route::get('/showblogs', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/blogdetails/{id}', [GalleryController::class, 'details'])->name('blog.details');

//------------------------------------------Contract Us------------------------------------------

Route::get('contractus', [FrontController::class, 'footer'])->name('contact.info');


//-------------------------------------------  Message ---------------------------------------------

Route::resource('message',\App\Http\Controllers\MessageController::class);
