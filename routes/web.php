<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ?theme routes 

Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/services', 'services')->name('services');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    // Route::get('/checkout', 'checkout')->name('checkout');
    
});


//--------------------------------Product Module-------------------
Route::get('/product-single/{product}', [ProductController::class, 'show'])->name('show.product');
// Route::get('/product-related/{product}', [ProductController::class, 'showRelated'])->name('show.related.product');
Route::get('/menu', [ProductController::class,'index'])->name('theme.menu');



//----------------------------------cart Module----------------------

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/show', [CartController::class, 'viewCart'])->name('cart.show');
Route::delete('/cart/delete/{id}', [CartController::class, 'deleteFromCart'])->name('cart.remove');


//---------------------------------Checkout Module--------------------


Route::get('/checkout',[OrderController::class,'showCheckoutForm'])->name('theme.checkout')->middleware(  'check.for.price');
Route::post('/checkout/store',[OrderController::class,'processCheckout'])->name('checkout.store')->middleware(  'check.for.price');

Route::get('/checkout/pay',[OrderController::class,'payPal'])->name('checkout.pay');
Route::get('/checkout/success',[OrderController::class,'success'])->name('Success.pay');


//------------------------------------booking---------------
Route::post('/book', [BookController::class, 'store'])->name('book.store');


require __DIR__.'/auth.php';
