@extends('layout')

@section('content')
<section>
    <h1>Category {{ $name }}</h1>
    <p>This is category page</p>
    <p>Category Name: {{ $name }}</p>
    <a href="{{url('/product')}}">back</a>
</section>
@endsection