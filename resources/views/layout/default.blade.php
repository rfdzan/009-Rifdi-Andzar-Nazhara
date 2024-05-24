<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kanvas</title>
    <link rel="stylesheet" href="{{asset('css/default/default.css')}}">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>
    <main>
        @include('layout.navbar')
        @yield('content')
    </main>
</body>

</html>