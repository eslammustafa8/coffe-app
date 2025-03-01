<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BookController extends Controller
{
    public function store(StoreBookRequest $request){
        $booking =$request->validated();
        dd($booking);
            $date = Carbon::createFromFormat('m/d/Y', $booking['date'])->format('Y-m-d');
              $time = Carbon::createFromFormat('h:i A', $booking['time'])->format('H:i:s');

          
            $booking['date'] = $date;
            $booking['time'] = $time;
            $booking['user_id'] = auth()->user()->id;
        // dd(Date('Y-m-d'));


            if($booking['date'] > Date('Y-m-d')){
                Book::create($booking);
                return redirect()->route('theme.index')->with('success','Book created successfully');

            }
            if($booking['review']!=null){
                return redirect()->route('user.Bookings')->with('success','Review created successfully');
            }
            else{
                return redirect()->route('theme.index')->with('error','Invalid date');
            }
            }

    public function showBookings(){
        $bookings =Book::select()->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        return view('theme.user-bookings', compact('bookings'));
    }
    publiC function showBookingsrEVIEW(){
       
        return view('theme.review-booking');
    }
}