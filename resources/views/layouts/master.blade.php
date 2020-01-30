<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Diaquino Fortmeier">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SecuredFood</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>

<body>
    <nav>
        @include('partials.nav')
    </nav>

    <main>
        @yield('content')
    </main>


    <script src="{{ asset('/js/nav.js') }}"></script>
</body>

</html>
