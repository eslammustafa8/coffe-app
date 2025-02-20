<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use session;
use Symfony\Component\HttpFoundation\Response;

class checkForPrice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         if($request->url('/checkout') or $request->url('/checkout/store') ) {
            if(session('total_price')==0 ) {
                return abort(403);
            } 
        }
        return $next($request);
    }
}
