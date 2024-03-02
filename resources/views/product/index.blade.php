@extends('layout')

@section('content')
<section>
    <h1>Product</h1>
    <p>This is product page</p>
    <ul>
        @foreach(['food-beverage','beauty-health','home-care','baby-kid'] as $product)
        <li><a href="{{ url('product/category/'.$product) }}">{{ $product }}</a></li>
        @endforeach
    </ul>
    <a href="{{url('/')}}">back</a>
</section>
@endsection