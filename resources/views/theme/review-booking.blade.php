@extends('theme.master')
@section('title', 'PUT review')
@section('image_name', 'bg_3.jpg')


@section('content')
@include('theme.partials.hero')


<form action="{{ route('book.store') }}" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
    @csrf
    <div class="col-md-12">
        <div class="form-group">
            <label for="review">write your review</label>
            <textarea name="review" class="form-control" cols="30" rows="5" placeholder="write your review"></textarea>
        </div>
    </div>

    <div class="form-group mt-4">
        <button type="submit" class="btn btn-primary py-3 px-4">review</button>
    </div>
</form>