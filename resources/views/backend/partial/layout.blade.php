<!DOCTYPE html>
<html>
    <head>
        @include('backend.partial.header')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        @include('backend.partial.sidenav')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('backend.partial.script')
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>
</html>
