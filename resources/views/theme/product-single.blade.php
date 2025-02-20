@extends('theme.master')

@section('title', 'Single Product')
@section('image_name', 'bg_2.jpg')
{{-- @section('realatedProducts', ['product' => $relatedProducts]) --}}
@section('content')
        @include('theme.partials.hero')
            <section class="ftco-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-5 ftco-animate">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <a href="{{ asset('assets/images/' . $product->image) }}" class="image-popup">
                                <img src="{{ asset('assets/images/' . $product->image) }}" class="img-fluid"
                                    alt="Colorlib Template">
                            </a>
                        </div>
                        <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">

                                <h3>{{ $product->name }}</h3>
                                <p class="price"><span>${{ $product->price }}</span></p>
                                <p>{{ $product->description }}</p>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group d-flex">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                {{-- <select name="" id="" class="form-control">
                                                    <option value="">Small</option>
                                                    <option value="">Medium</option>
                                                    <option value="">Large</option>
                                                    <option value="">Extra Large</option>
                                                </select> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="input-group col-md-6 d-flex mb-3">
                                        <span class="input-group-btn mr-2">
                                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                                <i class="icon-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                            min="1" max="100">
                                        <span class="input-group-btn ml-2">
                                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                                <i class="icon-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <p>
                                    <button type="submit" style="color: white;" class="btn btn-primary py-3 px-5">Add to
                                        Cart</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

    @include('theme.partials.relatedProducts', ['realatedProducts' => $realatedProducts])
@endsection