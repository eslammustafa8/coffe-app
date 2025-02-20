@extends('theme.master')

@section('title', 'About')
@section('active-about', 'active')

@section('image_name', 'bg_3.jpg')

@section('content')

@include('theme.partials.hero')

@include('theme.partials.story')
@include('theme.partials.testimonials')
@include('theme.partials.menu-link')
@include('theme.partials.counter')



@endsection
