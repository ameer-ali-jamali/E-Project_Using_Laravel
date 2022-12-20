{{-- @include('header_footer\header') --}}
@include('header_footer\header')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('Javascript_&_Css\css\style')
</head>

<body>
    <div>
        <h1>Hello @yield('content')</h1>
    </div>




    @include('Javascript_&_Css\js\app')
</body>
</html>
@include('header_footer\footer')
