@extends('theme.master')

@section('title', 'Your Orders')
@section('image_name', 'bg_3.jpg')
@section('active-contact', 'active')

@section('content')

    @include('theme.partials.hero')

    <section class="ftco-section ftco-cart">
        <div class="container">
            <table class="table table-bordered table-dark table-striped" style="width: 100%;">
                <thead class="thead-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Total Price</th>
                        <th>Order Status</th>
                        <th>Time of Submitting</th>
                        <th>Actions</th> <!-- Added for potential details button -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr class="text-center">
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->first_name }}</td>
                            <td>{{ $order->last_name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->city }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                {{-- <a href="{{ route('order.details', $order->id) }}" class="btn btn-sm btn-info">Details</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection