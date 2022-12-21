@include('header_footer\header')
@stack('title')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Css_Js_php.css.bootstrap')
</head>

<body>

    @if ($name=="home")
    @yield('Home_Content')
    @endif

    <div>
        @if($name == 'about')
        @yield('About_Content')
        about
        @endif
    </div>
    <div>
        @if ($name == 'details')
        @yield('Details_Content')
        details
        @endif
    </div>
    <div>
        @if ($name == 'contact_Us')
        @yield('Contact_UsContent')
        contact
        @endif
    </div>
    <div>
        @if ($name == 'admin')
        @yield('Admin_Content')
        admin
        @endif
    </div>




    @include('Css_Js_php.js.boostarp_min')
    @include('Css_Js_php.js.jquery_min')
</body>

</html>
@include('header_footer\footer')
