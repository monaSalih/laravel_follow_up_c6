<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $products=[
            ['name'=>'laptop', 'price'=>1000],
            ['name'=>'iphone', 'price'=>500],
            ['name'=>'screen', 'price'=>2000],
            
        ];
        return view('welcome',compact('products'));
    }
}
