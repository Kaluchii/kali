<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/gif">
    @yield('meta')

    @include('front.styles')
    @yield('styles')
    {{--{!! $scripts->before_head_close_field !!}--}}
</head>
<body>
{{--    {!! $scripts->after_open_field !!}--}}
@include('front.header')
@include('front.application')
@include('front.small-info')
@include('front.seo-text')
@include('front.footer')
@include('front.scripts')

    <div class="wrapper">
        @yield('header')

        @yield('content')

        @yield('application')
        @yield('about-windows')
        @yield('small-info')
        @yield('seo-text')
        @yield('footer')
    </div>

    <div class="hide">
        @include('front.popups.sponsor_form')
        @include('front.popups.thank')
        <a href="#thanks" class="thank"></a>
    </div>

    @yield('scripts')

{{--    {!! $scripts->before_close_field !!}--}}

</body>
</html>