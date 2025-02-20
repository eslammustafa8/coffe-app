@extends('theme.master')

@section('active-login', 'active')

@section('title', 'Log in')
@section('image_name', 'bg_1.jpg')
@section('content')
@include('theme.partials.hero')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <form action="{{ route('login') }}" method="post" class="billing-form ftco-bg-dark p-3 p-md-5">

                    @csrf
                    <h3 class="mb-4 billing-heading">Login</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <button class="btn btn-primary py-3 px-4">Login</button>
                                </div>
                            </div>
                        </div>


                </form><!-- END -->
            </div> <!-- .col-md-8 -->
        </div>
    </div>
    </div>
</section> <!-- .section -->

@endsection