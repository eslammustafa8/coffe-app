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
            $date = Carbon::createFromFormat('m/d/Y', $booking['date'])->format('Y-m-d');
              $time = Carbon::createFromFormat('h:i A', $booking['time'])->format('H:i:s');

          
            $booking['date'] = $date;
            $booking['time'] = $time;
        // dd($booking);



   Book::create($booking);
   return redirect()->route('theme.index')->with('success','Book created successfully');
}
}