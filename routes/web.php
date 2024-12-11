<?php

use App\Http\Controllers\Twill\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('admin/locations/create', [LocationController::class, 'create']);

// Route::group(['prefix' => 'admin'], function () {
//     // Location module route
//     Route::resource('locations', 'App\Http\Controllers\Twill\LocationController');
// });
