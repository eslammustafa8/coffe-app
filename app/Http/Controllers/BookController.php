<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   

    public function store(StoreBookRequest $request)
    {
        $booking=$request->validated();
 
        dd($booking);
        if($booking->date > date('Y-m-d')){
        $book=Book::create($booking);

        return to_route('theme.index')->with('successfull-Booking','the booking is successfully added ');
        }

    }



   
}
