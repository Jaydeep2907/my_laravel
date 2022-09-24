<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script src="{{ url('/') }}/assets/js/jquery-library/jquery-3.5.1.min.js"></script>        
        <script src="{{ url('/') }}/assets/js/jquery-library/jquery.validate.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #9C27B0;
                color: white;
                text-align: center;
            }
            span.error {
                color: #dc3545;
                font-size: 14px;
            }
        </style>

    </head>
    <body>
        @section('sidebar')
        @show
        <div class="container">
            @yield('content')
        </div>
        @extends('layouts.footer')
    </body>
</html>

