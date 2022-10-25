<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;
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
