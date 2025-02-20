<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckoutRequest;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    // عرض نموذج الـ Checkout
    public function showCheckoutForm()
    {
        $totalPrice = session('total_price'); // استرجاع السعر من السيشن
        return view('theme.checkout', compact('totalPrice'));
    }

    public function processCheckout(StoreCheckoutRequest $request)
{
    
    // dump('وصلت للفانكشن');

    
    $orderData = $request->validated();

    // if (!auth()->check()) {
    //     return redirect()->route('login')->with('error', 'يجب تسجيل الدخول لإتمام الطلب');
    // }


    // if (!session()->has('total_price')) {
    //     return redirect()->route('checkout.index')->with('error', 'لا يوجد سعر إجمالي في السلة');
    // }

    // إضافة البيانات المطلوبة
    $orderData['user_id'] = auth()->id();
    $orderData['total_price'] = session('total_price');
    $orderData['status'] = 'pending';

    // طباعة البيانات قبل الحفظ
    // dd($orderData);

    // إنشاء الطلب
    $order = Order::create($orderData);

    // مسح السيشن بعد إتمام الطلب
    // session()->forget('total_price');

    // إعادة التوجيه مع رسالة نجاح
    return redirect()->route('checkout.pay');
}



        public function payPal(){


            return view('theme.pay');

        }
        public function success(){


            $deletOrder=Cart::where('user_id',Auth::user()->id);
            $deletOrder->delete();

            if($deletOrder){

            return view('theme.success')->with('success_message', 'Your payment was done successfully.');            }

        }


        
}