<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TeamController;
//use App\Http\Controllers\TotalStudentsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\usersettingsController;
use App\Http\Controllers\assigncourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProfileEditController;
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



// Route::get('/', [FrontController::class, 'front'])->name('front.home');


Route::get('test', function () {
    return view('welcometest');
});

//------------------------------------user profile start-------------------------


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');





//-------------------------------------user course show----------------------------

    Route::get('usercourse', [showBuyCourses::class, 'index'])->name('usercourse');


//-------------------------------------user course end----------------------------


//-------------------------------------user profile settings---------------------------
    Route::get('settings', [FrontController::class, 'usersettings'])->name('settings');




//-------------------------------------password change---------------------------

    Route::post('/updatepassword', [usersettingsController::class, 'updatePassword'])->name('update.password');


//-----------------------------------show Editprofile-------------------------------

    Route::get('editprofile', [FrontController::class, 'usereditProfile'])->name('editprofile');

    Route::post('profile/update', [ProfileEditController::class, 'updateProfile'])->name('profile.update');

//------------------------------------user profile End--------------------------


//-------------------------------------------------------------------PAYMENT GATEWAY---------------------------//


    Route::post('/pay/{course_id}', [SslCommerzPaymentController::class, 'index'])->name('pay')->middleware('canEnroll');
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

//------------------------------------------------------------------PAYMENT GATEWAY END--------------------------------------//


});

Route::get('showcourses', [FrontController::class, 'showcourses'])->name('showcourses.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('log_out', function () {
    \auth()->logout();
    return redirect()->route('index-page');
})->name('log_out');



////Userprofile Route
//Route::patch('/update-profile', [UserProfileController::class, 'update'])->name('update-profile');





// ----------------------------------------------------------------------- Admin -----------------------------------------------------------------------

Route::middleware(['auth', 'admin'])
    ->prefix('admin') //all route add admin before example:admin/course or admin/feedback
    ->group(function () {

        //----------------------dashboard route for admin-------------------------
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        // ------------------------------------------ Course ------------------------------------------

        Route::resource('course', CourseController::class); //course.store
        Route::resource('order', OrderController::class); //course.order

        // ------------------------------------------ Course ------------------------------------------


        // ------------------------------------------ Feedback ------------------------------------------

        Route::resource('feedback', FeedbackController::class);

        // ------------------------------------------ Feedback ------------------------------------------

        // ------------------------------------------ Team ------------------------------------------

        Route::resource('team', TeamController::class);


        // ------------------------------------------ Footer ------------------------------------------

        Route::resource('footer', FooterController::class);

        // ------------------------------------------ Footer ------------------------------------------


        //--------------------------------------admin course assign--------------------------

        Route::get('courseassign/{course_id}', [FrontController::class, 'assigncourseAndtrainerAssign'])->name('courseassign'); //multi controller function use for one route

        Route::get('assigncourses', [assigncourseController::class, 'showAssignedCourses'])->name('assign.courses');


        Route::post('assign', [assigncourseController::class, 'store'])->name('assign.store');


        Route::delete('deleteassigncourse/{assignedCourse}', [assigncourseController::class, 'deleteAssignCourse'])->name('assign.course.delete');

//        Route::post('deleteassigncourse/{assignedCourse}', [assigncourseController::class, 'deleteAssignCourse'])->name('assign.course.delete');



        //--------------------------------------gallery iamge--------------------------------------------

        Route::get('/creategallery', [GalleryController::class, 'create'])->name('gallery.create');
        Route::post('/storegallery', [GalleryController::class, 'store'])->name('gallery.store');

        Route::get('/editgallery', [GalleryController::class, 'view'])->name('gallery.edit');
        Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
        Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
        Route::get('/galleryedit/{id}', [GalleryController::class, 'edit'])->name('edit.gallery');
    });




Route::middleware(['auth', 't'])->group(function () {


//------------------------------------trainer profile------------------------------

    Route::get('trainerprofile', [TeamController::class, 'showTrainerProfile'])->name('trainer.profile');

    Route::get('trainer/assigncourses', [TeamController::class, 'assigncoursesShow'])->name('trainer.assigncourses');

    Route::get('trainer/settings', [TeamController::class, 'trainersettings'])->name('trainer.settings');

    Route::post('trainer/profileupdate', [ProfileEditController::class, 'trainerprofileupdate'])->name('trainer.profileupdate');

});






// ----------------------------------------------------------------------- Logout -----------------------------------------------------------------------






