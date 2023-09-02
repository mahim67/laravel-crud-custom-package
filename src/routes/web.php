<?php

use Illuminate\Support\Facades\Route;

use Mahim\Bondstein\Http\Controllers\CategoryController;

Route::middleware(['web'])->group(function () {    
    Route::resource('categories', CategoryController::class);
});