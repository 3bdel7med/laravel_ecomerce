<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;


Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('/categories',CategoryController::class);
    Route::post('/categories/store',[CategoryController::class,'store']);
    Route::resource('/products',ProductController::class);
     
    Route::post('/products/store',[ProductController::class,'store']);
        
});
