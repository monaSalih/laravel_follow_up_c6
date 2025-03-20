<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//old version of welcome controller
// Route::get('/', function () {
   
    // $fruits=['banana','apple','orange'];
     // return view('welcome',compact('fruits'));
    // $products=[
    //     ['name'=>'laptop', 'price'=>1000],
    //     ['name'=>'iphone', 'price'=>500],
    //     ['name'=>'screen', 'price'=>2000],
        
    // ];
    // return view('welcome',compact('products'));

    
// });
//new version of controller
Route::get('/',[UserController::class,'index']);
Route::get('/about', function () {
    return view('about_us');
});

