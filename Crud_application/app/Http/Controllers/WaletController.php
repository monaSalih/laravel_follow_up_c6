<?php
// test
namespace App\Http\Controllers;

use App\Models\Walet;
use Illuminate\Http\Request;

class WaletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=[
            ['name'=>'laptop', 'price'=>1000],
            ['name'=>'iphone', 'price'=>500],
            ['name'=>'screen', 'price'=>2000],
            
        ];
        return view('walet', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Walet $walet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Walet $walet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Walet $walet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Walet $walet)
    {
        //
    }
}
