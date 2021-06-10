<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServieCotroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
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

Route::get('/',[HomeController::class,'Homeindex']);

Route::get('/visitor',[VisitorController::class,'VisitorIndex']);
// Admin Panel Service Management

Route::get('/service',[ServieCotroller::class,'Serviesfun']);
Route::get('/getServicesData',[ServieCotroller::class,'getServicesData']);
Route::post('/ServiceDelete',[ServieCotroller::class,'ServiceDelete']);
Route::post('/ServiceDetails',[ServieCotroller::class,'getServiceDetails']);
Route::post('/ServiceUpdate',[ServieCotroller::class,'ServiceUpdate']);
Route::post('/ServiceAdd',[ServieCotroller::class,'ServiceAdd']);


// Admin Panel Courses manaement

Route::get('/courses',[CourseController::class,'CoursesIndex']);
Route::get('/getCoursesData',[CourseController::class,'getCoursesData']);
Route::post('/CoursesDelete',[CourseController::class,'CoursesDelete']);
Route::post('/CoursesDetails',[CourseController::class,'getCoursesDetails']);
Route::post('/CoursesUpdate',[CourseController::class,'CoursesUpdate']);
Route::post('/CoursesAdd',[CourseController::class,'CoursesAdd']);


// Admin Panel Project manaement

Route::get('/Project',[ProjectController::class,'ProjectIndex']);
Route::get('/getProjectData',[ProjectController::class,'getProjectData']);
Route::post('/ProjectDelete',[ProjectController::class,'ProjectDelete']);
Route::post('/ProjectDetails',[ProjectController::class,'getProjectDetails']);
Route::post('/ProjectUpdate',[ProjectController::class,'ProjectUpdate']);
Route::post('/ProjectAdd',[ProjectController::class,'ProjectAdd']);



// Admin Panel Projects Management



Route::get('/Contact',[ContactController::class,'ContactIndex']);
Route::get('/ContactDelete',[ContactController::class,'ContactDelete']);
Route::get('/getContactData',[ContactController::class,'getContactData']);


// Admin Panel Review Management


Route::get('/Review',[ReviewController::class,'ReviewIndex']);
Route::get('/getReviewData',[ReviewController::class,'getReviewData']);
Route::get('/ReviewDetails',[ReviewController::class,'getReviewDetails']);
Route::get('/ReviewDelete',[ReviewController::class,'ReviewDelete']);
Route::get('/ReviewUpdate',[ReviewController::class,'ReviewUpdate']);
Route::get('/ReviewAdd',[ReviewController::class,'ReviewAdd']);



// Admin Panel Review Management






// Admin Photo Gallery






