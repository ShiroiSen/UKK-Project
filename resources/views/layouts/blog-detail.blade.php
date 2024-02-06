<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>BlogID | {{ $title }}</title>
</head>
<body>
   @include('partials.navbar2')

    <main class="">
        @yield('container')
    </main>
</body>
</html>