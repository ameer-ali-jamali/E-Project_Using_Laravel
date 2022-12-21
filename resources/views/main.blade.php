@include('header_footer\header')
@stack('title')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    @include('Css_Js_php.css.bootstrap')
    @include('Css_Js_php.css.style')
    @include('Css_Js_php.css.vendor')
    @include('Css_Js_php.css.normalize')
    @include('Css_Js_php.css.icon')

    <!-- script
		================================================== -->
    @include('Css_Js_php.js.modernizr')
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
    @include('Css_Js_php.js.plugins')
    @include('Css_Js_php.js.script')
</body>

</html>
@include('header_footer\footer')
