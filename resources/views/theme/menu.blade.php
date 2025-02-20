@extends('theme.master')

@section('title', 'Menu')
@section('active-menu','active')
@section('image_name', 'bg_3.jpg')

@section('content')


	@include('theme.partials.hero')

	@include('theme.partials.booking')

	<section class="ftco-section">
		<div class="container">
			<div class="row">


				<div class="col-md-6">
					<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
					@if (count($deserts) > 0)
						@foreach ($deserts as $desert)


							<div class="pricing-entry d-flex ftco-animate">
								<div class="img" style="background-image: url('{{ asset('assets/images/' . $desert->image) }}');">
								</div>
								<div class="desc pl-3">
									<div class="d-flex text align-items-center">
										<h3><span>{{ $desert->name }}</span></h3>
										<span class="price">${{ $desert->price }}</span>
									</div>
									<div class="d-block">
										<p>{{ $desert->description }}</p>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>

				<div class="col-md-6">
					<h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
					@if (count($drinks) > 0)
						@foreach ($drinks as $drinks)


							<div class="pricing-entry d-flex ftco-animate">
								<div class="img" style="background-image: url('{{ asset('assets/images/' . $drinks->image) }}');">
								</div>
								<div class="desc pl-3">
									<div class="d-flex text align-items-center">
										<h3><span>{{ $drinks->name }}</span></h3>
										<span class="price">${{ $drinks->price }}</span>
									</div>
									<div class="d-block">
										<p>{{ $drinks->description }}</p>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-menu mb-5 pb-5">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Our Products</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
						the blind texts.</p>
				</div>
			</div>
			<div class="row d-md-flex">
				<div class="col-lg-12 ftco-animate p-md-5">
					<div class="row">
						<div class="col-md-12 nav-link-wrap mb-5">
							<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
								aria-orientation="vertical">

								<a class="nav-link active" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
									role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

								<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
									aria-controls="v-pills-3" aria-selected="false">Desserts</a>
							</div>
						</div>
						<div class="col-md-12 d-flex align-items-center">

							<div class="tab-content ftco-animate" id="v-pills-tabContent">



								<div class="tab-pane fade show active" id="v-pills-2" role="tabpanel"
									aria-labelledby="v-pills-2-tab">
									<div class="row">
										@foreach ($drinkMenu as $drink)
											<div class="col-md-4 text-center">
												<div class="menu-wrap">
													<a href="{{ asset('assets/images/' . $drink->image)}}" class="menu-img img mb-4"
														style="background-image: url(' {{ asset('assets/images/' . $drink->image)}}');"></a>
													<div class="text">
														<h3><a href="{{ route('show.product', ['product' => $drink]) }}">{{ $drink->name }}</a></h3>
														<p>{{$drink->description}}</p>
														<p class="price"><span>${{ $drink->price }}</span></p>
														<p><a href="{{ route('show.product', ['product' => $drink]) }}" class="btn btn-primary btn-outline-primary">Show</a></p>
													</div>
												</div>
											</div>
										@endforeach


									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
									<div class="row">
										@foreach ($deserts as $dessert)
											<div class="col-md-4 text-center">
												<div class="menu-wrap">
													<a href="{{  asset('assets/images/' . $dessert->image) }}" class="menu-img img mb-4"
														style="background-image: url(' {{ asset('assets/images/' . $dessert->image)}}');"></a>
													<div class="text">
														<h3><a href="{{ route('show.product', ['product' => $dessert]) }}">{{ $dessert->name }}</a></h3>
														<p>{{ $dessert->description  }}</p>
														<p class="price"><span>${{ $dessert->price }}</span></p>
														<p><a href="{{ route('show.product', ['product' => $dessert]) }}" class="btn btn-primary btn-outline-primary">Show</a></p>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




@endsection