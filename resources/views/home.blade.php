@extends('main')
@push('title')
    <title>Home Page</title>
@endpush
@section('content')
    <h1>This is home page</h1>
@endsection
<h1>Hello Laravel 4!</h1>
<p> Welcome to the Awesomeness! </p>
{!! Form::open() !!}
{!! Form::close() !!}
