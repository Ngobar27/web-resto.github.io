<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- TODO: Box Icon URL -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- TODO: Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @yield('css')
  <title>@yield('title')</title>
</head>

<body>
  @yield('content')
  <!-- TODO: JQuery -->
  <script src="{{ asset ('js/jquery-3.5.1.min.js') }}"></script>
  @yield('js')

  <!-- TODO: Custom Javascript -->
  <script src="{{ asset('js/script.js') }}"></script>
  @yield('js')
</body>

</html>