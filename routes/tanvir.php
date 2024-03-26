<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Dashboard\DashboardController;

Route::controller(DashboardController::class)->prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get('/','index');
});