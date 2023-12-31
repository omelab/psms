<?php 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\SchoolController; 
use App\Http\Controllers\TeacherController; 
use App\Http\Controllers\ProgramController; 
use App\Http\Controllers\LibraryController; 
use App\Http\Controllers\AwardController; 
use App\Http\Controllers\OwnersBoardController; 
use App\Http\Controllers\CommitteeController; 
use App\Http\Controllers\SubjectController; 
use App\Http\Controllers\ExamController; 
// use App\Http\Controllers\AccountController; 


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

//auth routes
require __DIR__.'/auth.php';

Route::middleware('auth:admin')->group(function () {
    //Dashboard Page 
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //school
    Route::group(['prefix'=>'schools','as'=>'schools.'], function(){ 
        Route::get('/', [SchoolController::class, 'index'])->name('index');
        Route::get('/create/{school?}', [SchoolController::class, 'create'])->name('create');
        Route::post('/create/{school?}', [SchoolController::class, 'store'])->name('store');
        Route::get('/{school}', [SchoolController::class, 'show'])->name('show');
    }); 

    //teachers routes
    Route::resource('teachers', TeacherController::class);  

    //subject routes
    Route::resource('subjects', SubjectController::class);  

    //Exam routes
    Route::resource('exams', ExamController::class);  

    //Exam routes
    Route::resource('books', BookController::class);

    //teachers routes
    Route::resource('programs', ProgramController::class);  

    //libraries routes
    Route::resource('libraries', LibraryController::class);  

    //awards routes
    Route::resource('awards', AwardController::class);  

    //owners routes
    Route::resource('owners', OwnersBoardController::class);  

    //comeetees routes
    Route::resource('committees', CommitteeController::class);  

    //accounts routes
    // Route::resource('accounts', AccountController::class);  
});