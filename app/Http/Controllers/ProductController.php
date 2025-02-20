<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $deserts=Product::where('category_id',2)->get();
     $drinks=Product::where('category_id',1)->paginate(6);
     $drinkMenu=Product::where('category_id',1)->get();
    //  $dessertMenu=Product::where('category_id',2)->get();
    //  $products=Product::all();    
      return view('theme.menu',get_defined_vars());
  
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
    public function show(Product $product)
    {

         $realatedProducts=Product::where('category_id',$product->category_id)->where('id','!=',$product->id)->get();
         return view('theme.product-single',get_defined_vars());
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
