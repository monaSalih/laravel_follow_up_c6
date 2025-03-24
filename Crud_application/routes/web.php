<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatogoryController;

Route::get('/',[CatogoryController::class,'index'])->name('welcome');

// create new catogry
Route::get('/create_data',[CatogoryController::class,'create'])->name('create_data');

Route::post('/new_catogry',[CatogoryController::class,'store'])->name('new_catogry');


// delete catogry
Route::post('/delete_catogry/{id}',[CatogoryController::class,'destroy'])->name('delete_catogry');

// edit row
Route::post('/update_gategory/{id}',[CatogoryController::class,'edit'])->name('update_gategory');
Route::post('/save_update_gategory/{id}',[CatogoryController::class,'update'])->name('save_update_gategory');
//update_gategory