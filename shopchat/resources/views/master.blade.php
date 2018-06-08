<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>"/>

        <!-- Title and Description -->
        <title>@yield('title')</title>
        <meta name="Description" content="@yield('description')">

        <!-- Main stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}?v=<?php echo time(); ?>" type="text/css" media="screen" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-32x32.png') }}" type="image/png" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-16x16.png') }}" type="image/png" sizes="16x16" />
    </head>

    <body>

        @include( 'partials.header' )

        <main role="main" class="container">

            @yield('content')

        </main><!-- /.container -->

        @include( 'partials.footer' )

        <!-- Main scripts file -->
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

    </body>
</html>
