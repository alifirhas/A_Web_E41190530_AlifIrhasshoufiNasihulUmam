<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('head')

    <title>@yield('title')</title>
</head>

<body class="text-blueGray-800 antialiased">

    @yield('navigation')

    <main>
        @yield('main')
    </main>

    @yield('footer')

</body>

@yield('script')

</html>