<!DOCTYPE html>
<html lang="ko">
<head>
    <title>{{ config('app.name') }} | @yield('title')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <!-- common.css -->
    <link rel="stylesheet" href="./css/common.css">

    <!-- font Awesome CDN -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
          integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
          crossorigin="anonymous">
</head>
<body>
    @include('layouts.partial.navigation')

    @yield('content')

    @include('layouts.partial.footer')

    <!-- Jquery Library-->
    <script src="./js/jquery-3.5.1.min.js"></script>

    <!-- bootstrap js Library  -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    @yield('script')
</body>
</html>