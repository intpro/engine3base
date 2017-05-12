<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    @yield('styles')
    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/img/e-fav.gif" type="image/gif">

</head>
<body>
<div class="wrapper">
    @include('front.header')
    @yield('header')

    @yield('content')

    @include('front.footer')
    @yield('footer')
</div>
<div class="hide">

    @include('front.popups.thank')
    <a href="#thanks" class="thank"></a>
</div>
@include('front.scripts')
@include('front.metriks')
@yield('scripts')
@yield('metriks')
</body>
</html>