<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Psy\Command\WhereamiCommand;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
   
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must login first!');
        }

       
        $product = Product::find($request->product_id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

       
        if(Cart::where('product_id', $request->product_id)->where('user_id', Auth::id())->exists()) {
            return redirect()->back()->with('error', 'Product already in your cart!');
        }
        else {
        Cart::create([
            'user_id' => Auth::id(), 
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $product->price, 
            'subtotal'=>$product->price * $request->quantity,
        ]);
        }
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }



    public function viewCart()
    {

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must login first!');
        }

   
        $cart = Cart::where('user_id', Auth::id())->get();
        $total=Cart::where('user_id',Auth::user()->id)->sum('subtotal');
          
        session(['total_price' => $total]);
        return view('theme.cart', get_defined_vars());
    }
    


public function deleteFromCart($id)
{
    if (Auth::check()) {

        // dd($id);
        Cart::where('id', $id)->where('user_id', Auth::user()->id)->delete();
        return redirect()->route('cart.show')->with('success', 'Product deleted from cart successfully!');
    }
    return redirect()->back()->with('error', 'You must be logged in to perform this action.');
}
}
