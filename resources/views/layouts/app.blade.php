<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ get_settings("site_name") }} - {{ translate("دخول - لوحة التحكم") }}</title>
    <link rel="icon" type="image/x-icon" href="{{ url('/assets/settings/') }}/{{ get_settings("site_fav_icon") }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @include('frontend.css.style')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
