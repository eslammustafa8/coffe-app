<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Related products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
            </div>
        </div>
        <div class="row">
            @if(count($realatedProducts) > 0)
                @foreach($realatedProducts as $relatedProduct)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="{{ asset('assets/images/' . $relatedProduct->image) }}" class="img"
                                style="background-image: url('{{ asset('assets/images/' . $relatedProduct->image) }}');"></a>
                            <div class="text text-center pt-4">
                                <h3><a
                                        href="{{ route('show.product', ['product' => $relatedProduct]) }}">{{ $relatedProduct->name }}</a>
                                </h3>
                                <p>{{ $relatedProduct->description }}</p>
                                <p class="price"><span>${{ $relatedProduct->price }}</span></p>
                                <p><a href="{{ route('show.product', ['product' => $relatedProduct]) }}"
                                        class="btn btn-primary btn-outline-primary">Show</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 text-center">
                    <p>No related products found.</p>
                </div>
            @endif
        </div>
    </div>
</section>