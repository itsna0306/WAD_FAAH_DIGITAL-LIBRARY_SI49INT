<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilityController;

Route::get('/', function () {
    return redirect()->route('facilities.index');
});

Route::resource('facilities', FacilityController::class)
    ->middleware('facility.access');