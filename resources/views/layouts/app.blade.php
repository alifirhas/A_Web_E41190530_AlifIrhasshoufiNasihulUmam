<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>
</head>
<body class="bg-gray-800 flex flex-col h-screen justify-between">
    @yield('header')

    @yield('content')

    @yield('footer')
</body>
</html>