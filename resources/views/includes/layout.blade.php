<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="container">
        @include('includes.header');
        
        @yield('content')

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>