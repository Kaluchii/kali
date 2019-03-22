<!DOCTYPE html>
<html lang="ru">
<head>
    @if($app->environment('local'))
        <meta name="robots" content="noindex, nofollow" />
    @else
        <meta name="robots" content="index,follow" />
    @endif
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="HandheldFriendly" content="true">
    <meta name="googlebot" content="NOODP" />
    <meta name="publisher" content="Пластиковые окна Kali"/>
    <meta name="author" content="Пластиковые окна Kali"/>
    <meta name="copyright" content="Пластиковые окна Kali" />
    <meta name="revisit-after" content="2 days" />
    <meta name="Cache-Control" content="no-cache, must-revalidate"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="manifest" href="/manifest.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1d8ed5">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Kali">
    <meta name="apple-mobile-web-app-title" content="Kali">
    <meta name="theme-color" content="#1d8ed5">
    <meta name="msapplication-TileColor" content="#1d8ed5">
    <meta name="msapplication-TileImage" content="/img/icons/mstile-144x144.png">
    <meta name="msapplication-navbutton-color" content="#1d8ed5">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">

    <link rel="shortcut icon" href="/img/icons/ie-favicon.ico"/>
    <link rel="shortcut icon" sizes="48x48" href="/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/icons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/img/icons/android-chrome-512x512.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1d8ed5">

    @yield('meta')

    @include('front.styles')
    @yield('styles')
    {!! $scripts->before_head_close_field !!}
</head>
<body>
    {!! $scripts->after_body_open_field !!}
@include('front.header')
@include('front.application')
@if(isset($is_main))
    @include('front.index.about-windows')
@else
    @include('front.small-info')
@endif
@include('front.footer')
@include('front.scripts')

    <div class="page-wrapper" itemscope itemtype="http://schema.org/WebPage">
        @yield('header')

        @yield('content')

        @yield('application')
        @yield('about-windows')
        @yield('small-info')
        @yield('seo-text')
        @yield('footer')
    </div>

    <div class="hide">
        @include('front.popups.call_back_form')
        @include('front.popups.thank')
        <a href="#thanks" class="thank"></a>
    </div>

    @stack('first_scripts')
    @stack('scripts')

    {!! $scripts->before_body_close_field !!}

</body>
</html>