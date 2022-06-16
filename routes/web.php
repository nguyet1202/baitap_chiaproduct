<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\sumController;
use App\Http\Controllers\PageController;



Route::get('trangchu',[PageController::class,'getIndex']); 
