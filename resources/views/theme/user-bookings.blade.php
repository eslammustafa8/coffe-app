@extends('theme.master')
@section('title', 'Your Bookings')
@section('image_name', 'bg_3.jpg')


@section('content')
    @include('theme.partials.hero')

    <section class="ftco-section ftco-cart">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif
            <table class="table table-bordered table-dark table-striped" style="width: 100%;">
                <thead class="thead-primary">
                    <tr>
                        <th>Booking ID</th>
                        <th>First name</th>
                        <th>Secound name</th>
                        <th>date</th>
                        <th>time</th>
                        <th>message</th>
                        <th>status</th>

                        <th>REVIEW</th>

                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr class="text-center">
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->first_name }}</td>
                            <td>{{ $booking->last_name  }}</td>
                            <td>{{ $booking->date }}</td>
                            <td>{{ $booking->time }}</td>
                            <td>{{ $booking->message }}</td>
                            <td>{{ $booking->status }}</td>
                            @if ($booking->status == 'booked')
                                <td><a href="{{ route('user.Bookings.REVIEW') }}"
                                        class="btn btn-primary btn-outline-primary">Writing review</a></td>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection