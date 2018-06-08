<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ URL::asset('images/favicon.ico') }}">

        <title>@yield('title')</title>

        <meta name="Description" content="@yield('description')">

        <!-- Main stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}?v=<?php echo time(); ?>" type="text/css" media="screen" />
    </head>

    <body>

        @include( 'partials.header' )

        <main role="main" class="container">

            @yield('content')

        </main><!-- /.container -->

        @include( 'partials.footer' )

        <!-- Main scripts file -->
        <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>

    </body>
</html>
