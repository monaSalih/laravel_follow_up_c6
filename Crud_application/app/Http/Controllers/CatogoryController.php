<?php

namespace App\Http\Controllers;

use App\Models\Catogory;
use Illuminate\Http\Request;

class CatogoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catogories = Catogory::where('is_deleted', 0)->get();
        return view('welcome', compact('catogories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('catogory_layout.create_new_catogory');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $add_catogory=Catogory::create([
            'name'=>$request->name,
            'photo'=>$request->photo,
            'status'=>$request->status,
        ]);
        $add_catogory->save();

        return  redirect()->route('welcome')->with('status','catogory add successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Catogory $catogory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //    dd($id);
        $catogory_data=Catogory::findOrfail($id);
        // dd($catogory_data);
        return view('catogory_layout.update_catogory',compact('catogory_data'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($id,$request);
        $catogry_row=Catogory::findOrfail($id);
        $catogry_row->update([
        'name'=>$request->name,
        'photo'=>$request->photo,
        'status'=>$request->status,
        ]);
        $catogry_row->save();
        return  redirect()->route('welcome')->with('status','catogory update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $catogory_delete_item_data=Catogory::findOrfail($id);
        // dd($catogory_delete_item_data);
        $catogory_delete_item_data->update([
            'is_deleted'=>1,
        ]);
        $catogory_delete_item_data->save();
        
        return  redirect()->route('welcome')->with('status','catogory delete successfully');

        //
    }
}
