<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $products= Product::latest()->paginate(4);
        return view('theme.home',get_defined_vars());
    }
     
    public function menu()
    {
        // return view('theme.menu');
    }
    public function services()
    {
        return view('theme.services');
    }
    public function about()
    {
        return view('theme.about');
    }
    public function contact()
    {
        return view('theme.contact');
    }
   
    public function productSingle()
    {
        return view('theme.product-single');
    }
    public function checkout()
    {
        return view('theme.checkout');
    }

}
