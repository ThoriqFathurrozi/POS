@extends('layout')

@section('content')
<section>
    <h1>Welcome to Point Of Sales Website</h1>
    <p>This is The Home page</p>
    <ul>
        @foreach( ['product', 'user/28/name/thoriq fathurrozi', 'transaction'] as $l)
        <li><a href="{{ url($l) }}">{{ str_contains($l,'/') ? explode('/',$l)[0] : $l }}</a></li>
        @endforeach
    </ul>
</section>
@endsection