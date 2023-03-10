<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ get_settings('site_name') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ url('/assets/settings/') }}/{{ get_settings("site_fav_icon") }}">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        @include('frontend.css.style')
    </head>
    <body>
        @include('frontend.partial.navbar')
        @yield('content')
        @include('frontend.partial.footer')
        @include('frontend.partial.floatPages')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.select2').select2();

                $('.addCompare').click(function() {
                    var id = $(this).attr('carid');
                    $('.shake-it-compare').removeClass('animate__shakeX');
                    $.get('{{ url("add/to/compare") }}/'+id,function(res) {
                        if(res == 1) {
                            $('.shake-it-compare').addClass('animate__shakeX');
                        } else {
                            alert('failed');
                        }
                    });
                });

                $('.addFavorite').click(function() {
                    var id = $(this).attr('carid');
                    $('.shake-it-fav').removeClass('animate__shakeX');
                    $.get('{{ url("add/to/favorite") }}/'+id,function(res) {
                        if(res == 1) {
                            $('.shake-it-fav').addClass('animate__shakeX');
                        } else {
                            alert('failed');
                        }
                    });
                });
            });
        </script>
        @yield('js')
    </body>
</html>
