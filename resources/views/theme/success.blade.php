@extends('theme.master')


@section('title', 'Success payment ')
@section('content')
@section('image_name', 'bg_3.jpg')

    @include('theme.partials.hero')
    @if(session('success_message'))
        <div class="alert alert-success">
            {{ session('success_message') }}
        </div>
    @endif

@endsection