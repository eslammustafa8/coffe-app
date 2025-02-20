@extends('theme.master')

@section('title', 'Checkout')
@section('active-cart', 'active')

@section('image_name', 'bg_3.jpg')
@section('content')

    @include('theme.partials.hero')

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <form action="{{ route('checkout.store') }}" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
                        @csrf
                        <h3 class="mb-4 billing-heading">Billing Details</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your first name"
                                        value="{{ old('first_name') }}" name="first_name">
                                </div>
                                @error('first_name')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your last name"
                                        value="{{ old('last_name') }}" name="last_name">
                                </div>
                                @error('last_name')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">State / Country</label>
                                    <select name="state" class="form-control">
                                        <option value="France">France</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Hongkong">Hongkong</option>
                                        <option value="Japan">Japan</option>
                                    </select>
                                </div>
                                @error('state')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="streetaddress">Street Address</label>
                                    <textarea name="address" class="form-control">{{ old('address') }}</textarea>
                                </div>
                                @error('address')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">Town / City</label>
                                    <input type="text" class="form-control" placeholder="" name="city">
                                </div>
                                @error('city')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcodezip">Postcode / ZIP *</label>
                                    <input type="text" class="form-control" placeholder="" name="zip_code">
                                </div>
                                @error('zip_code')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" placeholder="" name="phone">
                                </div>
                                @error('phone')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Email Address</label>
                                    <input type="email" class="form-control" placeholder="" name="email">
                                </div>
                                @error('email')
                                    <span class="alert-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Total price">Total price</label>
                                    <span class="form-control">{{ $totalPrice }}</span>
                                    <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary py-3 px-4">Place an order</button>
                                </div>
                            </div>
                        </div>
                    </form><!-- END -->
                </div>
            </div>
        </div>
    </section> <!-- .section -->

@endsection