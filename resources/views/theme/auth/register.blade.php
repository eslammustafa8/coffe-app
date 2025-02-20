

 @extends('theme.master')
@section('title', 'Register')
@section('image_name', 'bg_2.jpg')
@section('content')


@section('active-register', 'active')

        {{-- hero /slider  --}}
    @include('theme.partials.hero')

    {{-- main content --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <form action="{{ route('register') }}" class="billing-form ftco-bg-dark p-3 p-md-5" method="post">
                        @csrf
                        <h3 class="mb-4 billing-heading">Register</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="name" name="name" > 
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" class="form-control" placeholder="email" name="email">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <div class="radio">
                                        <button  type="submit" class="btn btn-primary py-3 px-4">Register</button>
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