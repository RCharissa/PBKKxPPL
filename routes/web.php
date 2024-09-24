<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/landing', LandingPageController::class);