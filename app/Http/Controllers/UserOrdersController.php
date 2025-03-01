<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrdersController extends Controller
{
    public function showOrders(){
        $orders =Order::select()->where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('theme.user-orders', compact('orders'));
    }
}
