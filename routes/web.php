<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\Footer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CanEnroll;
use App\Http\Controllers\showBuyCourses;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'front'])->name('front.home');

Route::get('test', function () {
    return view('welcometest');
});

// ------------------------------------user profile route-------------------------
Route::get('userprofile', [FrontController::class, 'userprofile'])->name('userprofile')->middleware('userprofile');

//-------------------------------------user course show----------------------------
Route::get('usercourse', [showBuyCourses::class, 'index'])->name('usercourse');

// Route::get('usercourse', [FrontController::class, 'usercourse']);


//--------------------------------------------------------------------------------------
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('log_out', function () {
    \auth()->logout();
    return redirect()->route('front.home');
})->name('log_out');

// ----------------------------------------------------------------------- Admin -----------------------------------------------------------------------

Route::middleware(['auth', 'admin'])
    ->prefix('admin') //all route add admin before example:admin/course or admin/feedback
    ->group(function () {
        // ------------------------------------------ Course ------------------------------------------

        Route::resource('course', CourseController::class); //course.store
        Route::resource('order', OrderController::class); //course.store

        // ------------------------------------------ Course ------------------------------------------

        // ------------------------------------------ Feedback ------------------------------------------

        Route::resource('feedback', FeedbackController::class);

        // ------------------------------------------ Feedback ------------------------------------------

        // ------------------------------------------ Team ------------------------------------------

        Route::resource('team', TeamController::class);

        // ------------------------------------------ Team ------------------------------------------

            // ------------------------------------------ Footer ------------------------------------------

            Route::resource('footer', FooterController::class);

            // ------------------------------------------ Footer ------------------------------------------
    });

// ----------------------------------------------------------------------- Admin -----------------------------------------------------------------------

// ----------------------------------------------------------------------- User [ public route ] -------------------------------------------------------

Route::get('course-info/{id}', [FrontController::class, 'course_info'])->name('single_course_info');

// ------------------------------------------ Team ------------------------------------------

Route::get('team', [FrontController::class, 'team'])->name('team_info');

// ------------------------------------------ Team ------------------------------------------

// ----------------------------------------------------------------------- User [ public route ] -------------------------------------------------------

// ----------------------------------------------------------------------- Logout -----------------------------------------------------------------------

Route::middleware('auth')->group(function () {});

// ----------------------------------------------------------------------- Logout -----------------------------------------------------------------------


//-------------------------------------------------------------------PAYMENT GATEWAY---------------------------//


Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay/{course_id}', [SslCommerzPaymentController::class, 'index'])->name('pay');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

//------------------------------------------------------------------PAYMENT GATEWAY END--------------------------------------//
