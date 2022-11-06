<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('/',[HomeController::class, 'HomeIndex']);
Route::post('/contactSend',[HomeController::class, 'ContactSend']);

