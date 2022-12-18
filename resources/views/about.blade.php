@extends('main')
@push('title')
    <title>About Page</title>
@endpush
@section('content')
    <h1>This is about page</h1>
@endsection
<h1>Hello Laravel 4!</h1>
<p> Welcome to the Awesomeness! </p>
{!! Form::open('') !!}
{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
