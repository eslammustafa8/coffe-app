<script src="{{asset('assets/js')}}/jquery.min.js"></script>
<script src="{{asset('assets/js')}}/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('assets/js')}}/popper.min.js"></script>
<script src="{{asset('assets/js')}}/bootstrap.min.js"></script>
<script src="{{asset('assets/js')}}/jquery.easing.1.3.js"></script>
<script src="{{asset('assets/js')}}/jquery.waypoints.min.js"></script>
<script src="{{asset('assets/js')}}/jquery.stellar.min.js"></script>
<script src="{{asset('assets/js')}}/owl.carousel.min.js"></script>
<script src="{{asset('assets/js')}}/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/js')}}/aos.js"></script>
<script src="{{asset('assets/js')}}/jquery.animateNumber.min.js"></script>
<script src="{{asset('assets/js')}}/bootstrap-datepicker.js"></script>
<script src="{{asset('assets/js')}}/jquery.timepicker.min.js"></script>
<script src="{{asset('assets/js')}}/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s"></script>
<script src="{{asset('assets/js')}}/google-map.js"></script>
<script src="{{asset('assets/js')}}/main.js"></script><!-- Bootstrap CSS -->


<script>
    $(document).ready(function () {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function (e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>