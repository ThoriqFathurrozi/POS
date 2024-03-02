@extends('layout')

@section('content')
<section>
    <h1>User</h1>
    <p>This is user page</p>
    <p>User ID: {{ $id }}</p>
    <p>User Name: {{ $name }}</p>
    <a href="{{url('/')}}">back</a>
</section>
@endsection