<!DOCTYPE html>
<html>

<head>
    <!-- TODO: Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- TODO: Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- TODO: Import materialize.css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />

    <!-- TODO: Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>

<body class="scrollspy">
    @yield('content')
    <!-- TODO: JavaScript at end of body for optimized loading -->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

    <!-- TODO: Custom Javascript -->
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>

</html>