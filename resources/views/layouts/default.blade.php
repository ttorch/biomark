<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Biomark Admin') }}</title>

    <!-- Styles -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
    <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            @include('include.common.sidebar')
        </nav>

        <div id="content">
            @yield('content')
        </div>
    </div>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Nice Scroll Js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
    <script>
        $(document).ready(function () {
            
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                // var isActive = $('#sidebar').hasClass("active");
                // var icon = 'left';
                // if (isActive)
                //     icon = 'left';
                // else
                //     icon = 'right';
                // $('i',this).attr('class','glyphicon glyphicon-chevron-'+icon);
            });

            //Set active sidebar menu
            var pathname = (window.location.pathname).toLowerCase();
            $( "ul#sidebar-menu li" ).each(function() {
                var l_title = ($('a', this ).text()).toLowerCase();
                var re = new RegExp(l_title);
                var m = re.test(pathname)
                var is_el_active = $(this).hasClass('active');
                if (m && !is_el_active) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });

            $('.upload-btn').click( function(event) {
                event.preventDefault();
                $("#avatar").click();
            });
            
            function fasterPreview( uploader ) {
                //debugger;
                if ( uploader.files && uploader.files[0] ){
                    //console.log(window.URL.createObjectURL(uploader.files[0]));
                    $('img#profile-img').attr(
                        'src', 
                        window.URL.createObjectURL(uploader.files[0]) 
                    );
                }
            }

            $("input#avatar").on('change', function(){
                fasterPreview( this );
            });
        });
    </script>
</body>