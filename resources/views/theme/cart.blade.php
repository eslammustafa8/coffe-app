@extends('theme.master')

@section('title', 'Cart')
@section('active-cart', 'active')

@section('image_name', 'bg_3.jpg')
@section('content')

    @include('theme.partials.hero')
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($cart) > 0)

                                                @foreach ($cart as $cart)
                                                                <tr class="text-center">

                                                                    {{-- <form id="delete-form" method="POST"
                                                                        action="{{ route('cart.remove', $cart->id) }}">
                                                                        @csrf
                                                                        @method('DELETE')


                                                                        <span class="icon-close"><a href"submit"></a></span>

                                                                    </form> --}}

                                                                    <form action="{{ route('cart.remove', $cart->id) }}" method="POST"
                                                                        id="deleteForm-{{ $cart->id }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <td>
                                                                            <button type="button" class="product-remove"
                                                                                onclick="confirmDelete({{ $cart->id }})">
                                                                                <span class="icon-close"></span>
                                                                            </button>
                                                                        </td>
                                                                    </form>
                                                                    <td class="image-prod">
                                                                        <div class="img"
                                                                            style="background-image: url('{{ asset('assets/images/' . $cart->product->image) }}');">
                                                                        </div>
                                                    </div>
                                                    </td>

                                                    <td class="product-name">
                                                        <h3{{ $cart->product->name }}</h3>
                                                            <p>{{ $cart->product->description }}</p>

                                                    </td>

                                                    <td class="price">${{ $cart->price }}</td>

                                                    <td>
                                                        <div class="input-group mb-3">
                                                            <input disabled type="text" name="quantity" class="quantity form-control input-number"
                                                                value="{{ $cart->quantity }}" min="1" max="100">
                                                        </div>
                                                    </td>

                                                    <td class="total">${{ ($cart->price * $cart->quantity)}}</td>
                                                    </tr><!-- END TR-->
                                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center alert-danger">No items in your cart</td>
                                    </tr>
                                @endif

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>${{ $total }}</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>

                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>${{ $total }}</span>
                    </p>
                </div>
                @if($total)
                    <p class="text-center"><a href="{{ route('theme.checkout') }}" class="btn btn-primary py-3 px-4">Proceed to
                            Checkout</a></p>

                @endif
            </div>
        </div>
        </div>
    </section>


@endsection