<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;


http://localhost/admin/attributes/add-values;



Route::get('/',[HomeController::class, 'HomeIndex']);
Route::post('/contactSend',[HomeController::class, 'ContactSend']);

Route::get('/Courses',[CoursesController::class, 'CoursePage']);
Route::get('/Projects',[ProjectsController::class, 'ProjectPage']);
Route::get('/Policy',[PolicyController::class, 'PolicyPage']);
Route::get('/Terms',[TermsController::class, 'TermPage']);
Route::get('/Contact',[ContactController::class, 'ContactPage']);



