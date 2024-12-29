<?php

use App\Http\Controllers\AdmissionController;
use Illuminate\Support\Facades\Route;

Route::controller(AdmissionController::class)->group(function() {
    Route::get('/','index');
    Route::get('create','create');
    Route::post('store','store');
    Route::get('edit/{id}','edit');
    Route::post('update/{id}','update');
});