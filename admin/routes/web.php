<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CoursesController;

http://localhost/admin/attributes/add-values;



Route::get('/',[HomeController::class, 'HomeIndex']);
Route::get('/visitor',[VisitorController::class, 'VisitorIndex']);


//Admin pannel Service Management
Route::get('/service',[ServiceController::class, 'ServiceIndex']);
Route::get('/getServicesData',[ServiceController::class, 'getServicesData']);
Route::post('/ServiceDelete',[ServiceController::class, 'ServiceDelete']);
Route::post('/ServiceDetails',[ServiceController::class, 'getServiceDetails']);
Route::post('/ServiceUpdate',[ServiceController::class, 'ServiceUpdate']);
Route::post('/ServiceAdd',[ServiceController::class, 'ServiceAdd']);



// Admin Panel Courses manaement
Route::get('/courses',[CoursesController::class, 'CoursesIndex']);
Route::get('/getCoursesData',[CoursesController::class, 'getCoursesData']);
Route::post('/CoursesDelete',[CoursesController::class, 'CoursesDelete']);
Route::post('/CoursesDetails',[CoursesController::class, 'getCoursesDetails']);
Route::post('/CoursesUpdate',[CoursesController::class, 'CoursesUpdate']);
Route::post('/CoursesAdd',[CoursesController::class, 'CoursesAdd']);

