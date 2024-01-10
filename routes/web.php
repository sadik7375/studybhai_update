<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TeamController;

use App\Http\Controllers\usersettingsController;
use App\Http\Controllers\assigncourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\UserDashbroadController;

use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\Footer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CanEnroll;
use App\Http\Controllers\showBuyCourses;

//use App\Http\Controllers\TrainerController;

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

//test for getting dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
//--------------------------------------admin course assign--------------------------

Route::get('admin/courseassign/{course_id}', [FrontController::class, 'assigncourseAndtrainerAssign'])->name('courseassign'); //multi controller function use for one route

Route::post('assign',[assigncourseController::class,'store'])->name('assign.store');



// ------------------------------------user profile start-------------------------
Route::get('userprofile', [FrontController::class, 'userprofile'])->name('userprofile');




//-------------------------------------user course show----------------------------

Route::get('usercourse', [showBuyCourses::class, 'index'])->name('usercourse');

//-------------------------------------user course end----------------------------


//-------------------------------------user profile settings---------------------------
Route::get('settings', [FrontController::class, 'usersettings'])->name('settings');


Route::get('usersettings', [FrontController::class, 'usersettings'])->name('usersettings');

//-------------------------------------password change---------------------------

Route::post('/updatepassword', [usersettingsController::class, 'updatePassword'])->name('update.password');

//----------------------------show info in user profile dashbroad---------------

//Route::get('userprofile', [UserDashbroadController::class, 'showinfo'])->name('userprofile');


//----------------------------show info in user profile dashbroad End---------------

//-----------------------------------show Editprofile-------------------------------

Route::get('editprofile', [FrontController::class, 'usereditProfile'])->name('editprofile');

Route::post('profile/update', [ProfileEditController::class, 'updateProfile'])->name('profile.update');

//------------------------------------user profile End--------------------------


//----------------------------------Trainer profile start---------------------

Route::get('trainerprofile', [FrontController::class, 'trainerProfile'])->name('trainerprofile');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('log_out', function () {
    \auth()->logout();
    return redirect()->route('front.home');
})->name('log_out');


//Userprofile Route
Route::patch('/update-profile', [UserProfileController::class, 'update'])->name('update-profile');

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

        // ------------------------------------------ Trainer ------------------------------------------
        Route::middleware(['auth', 'tr'])->group(function () {
            Route::get('/trainer/dashboard', [TeamController::class, 'trainerDashboard'])->name('trainer.dashboard');
        });
            // ------------------------------------------ Footer ------------------------------------------

            Route::resource('footer', FooterController::class);

            // ------------------------------------------ Footer ------------------------------------------


        //--------------------------------------admin course assign--------------------------

        Route::get('courseassign/{course_id}', [FrontController::class, 'assigncourseAndtrainerAssign'])->name('courseassign'); //multi controller function use for one route

        Route::get('assigncourses',[assigncourseController::class,'showAssignedCourses'])->name('assign.courses');


        Route::post('assign',[assigncourseController::class,'store'])->name('assign.store');



        Route::post('deleteassigncourse/{assignedCourse}', [assigncourseController::class, 'deleteAssignCourse'])->name('assign.course.delete');














    });

// ----------------------------------------------------------------------- Admin -----------------------------------------------------------------------

// ----------------------------------------------------------------------- User [ public route ] -------------------------------------------------------

Route::get('course-info/{id}', [FrontController::class, 'course_info'])->name('single_course_info');

// ------------------------------------------ Team ------------------------------------------

Route::get('team', [FrontController::class, 'team'])->name('team_info');

// ------------------------------------------ Dashboard ------------------------------------------


// ----------------------------------------------------------------------- User [ public route ] -------------------------------------------------------

// ----------------------------------------------------------------------- Logout -----------------------------------------------------------------------

Route::middleware(['auth','tr'])->group(function () {


});

// ----------------------------------------------------------------------- Logout -----------------------------------------------------------------------


//-------------------------------------------------------------------PAYMENT GATEWAY---------------------------//


Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay/{course_id}', [SslCommerzPaymentController::class, 'index'])->name('pay')->middleware('canEnroll');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

//------------------------------------------------------------------PAYMENT GATEWAY END--------------------------------------//
