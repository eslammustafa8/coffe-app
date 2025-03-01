@extends('theme.master')

@section('title', 'Home')
@section('active-home', 'active')

@section('content')
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url('{{asset("assets/images")}}/bg_1.jpg');">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						@if (session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>

						@elseif	(session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}
							</div>

						@else<span class="subheading">Welcome</span>
						@endif
						{{-- @if(session('successful_booking'))
						<div class="alert alert-success">
							{{ session('successful_booking') }}
						</div>
						@endif --}}



						<h1 class="mb-4">The Best Coffee Testing Experience</h1>
						<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
							necessary regelialia.
						</p>
						<p><a href="{{ route('theme.menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
								href="{{ route('theme.menu') }}"
								class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url('{{asset("assets/images")}}/bg_2.jpg');">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Welcome</span>
						<h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
						<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
							necessary regelialia.
						</p>
						<p><a href="{{ route('theme.menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
								href="{{ route('theme.menu') }}"
								class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url('{{asset("assets/images")}}/bg_3.jpg');">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Welcome</span>
						<h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
						<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
							necessary regelialia.</p>
						<p><a href="{{ route('theme.menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
								href="{{ route('theme.menu') }}"
								class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
					</div>

				</div>
			</div>
		</div>
	</section>
	{{-- end hero --}}


	{{-- info and table booking --}}
	@include('theme.partials.booking')



	{{--story Section about 1 --}}
	@include('theme.partials.story')
	{{-- end story --}}
	{{-- end Story section --}}


	{{-- Services Section --}}
	@include('theme.partials.services')
	{{-- end Services Section --}}


	{{--menue link about 3 --}}
	@include('theme.partials.menu-link')
	{{-- end menu --}}

	{{--counter section --}}
	@include('theme.partials.counter')
	{{-- end counter section --}}


	{{-- best of Coffee sellers --}}
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Best Coffee Sellers</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts.</p>
				</div>
			</div>
			<div class="row">
				@if(count($products) > 0)
					@foreach($products as $product)
						<div class="col-md-3">
							<div class="menu-entry">
								<a href="{{ asset('assets/images/' . $product->image) }}" class="img"
									style="background-image: url('{{ asset('assets/images/' . $product->image) }}');"></a>
								<div class="text text-center pt-4">
									<h3><a href="{{ route('show.product', ['product' => $product]) }}">{{ $product->name }}</a></h3>
									<p>{{ $product->description }}</p>
									<p class="price"><span>${{ $product->price }}</span></p>
									<p><a href="{{ route('show.product', ['product' => $product]) }}"
											class="btn btn-primary btn-outline-primary">Show</a></p>
								</div>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</section>
	{{-- end best of Coffee sellers --}}


	{{-- gallary --}}
	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center"
						style="background-image: url('{{asset("assets/images")}}/gallery-1.jpg');">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center"
						style="background-image: url('{{asset("assets/images")}}/gallery-3.jpg');">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center"
						style="background-image: url('{{asset("assets/images")}}/gallery-3.jpg');">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center"
						style="background-image: url('{{asset("assets/images")}}/gallery-4.jpg');">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	{{-- end gallary --}}


	{{-- testimonials --}}
	@include('theme.partials.testimonials')
	{{-- end of testimony --}}


@endsection