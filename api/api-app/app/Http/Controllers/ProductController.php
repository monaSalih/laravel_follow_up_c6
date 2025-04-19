<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $product=Product::get();   
     if($product->count()>0){
        return ProductResource::collection($product);
        // response()->json([]);
     }else{
         return response()->json(['message'=>'no data found try to add product'],200);
     }
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
        $validator=Validator::make($request->all(),[
          'name'=>'required|string|max:255',
        'product'=>'required',
        'price'=>'required|integer',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->messages()],422);
        }

        $product=Product::create([
            'name'=>$request->name,
        'product'=>$request->product,
        'price'=>$request->price,
        ]);
        return response()->json(['message'=>'product created successfully',
        'data'=>new ProductResource ($product)],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource ($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required|string|max:255',
          'product'=>'required',
          'price'=>'required|integer',
          ]);
          if($validator->fails()){
              return response()->json(['error'=>$validator->messages()],422);
          }
  
          $product->update([
              'name'=>$request->name,
          'product'=>$request->product,
          'price'=>$request->price,
          ]);
          return response()->json(['message'=>'product updated successfully',
          'data'=>new ProductResource ($product)],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message'=>'product deleted successfully'],200);
    }
}
