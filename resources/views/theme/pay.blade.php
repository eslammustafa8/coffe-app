@extends('theme.master')
@section('image_name', 'bg_3.jpg')
@section('title', 'paying page')

@section('content')


    @include('theme.partials.hero')

    <div class="container">
        <!-- Replace "test" with your own sandbox Business account app client ID -->
        <script
            src="https://www.paypal.com/sdk/js?client-id=Aepvb36tFxR8lPhFxPrPwEU2jGXNVltqbPm_UaR7b0QSn1X7ta60vapkyLeyAV6I3YQgW-6gGRtGg_F8&currency=USD"></script>
        <!-- Set up a container element for the button -->
        <div id="paypal-button-container"></div>
        <script>
            paypal.Buttons({
                // Sets up the transaction when a payment button is clicked
                createOrder: (data, actions) => {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '{{ session('total_price') }}' // Can also reference a variable or function
                            }
                        }]
                    });
                },
                // Finalize the transaction after payer approval
                onApprove: (data, actions) => {
                    return actions.order.capture().then(function (orderData) {

                        window.location.href = '{{ route('Success.pay') }}';
                    });
                }
            }).render('#paypal-button-container');
        </script>

    </div>


@endsection