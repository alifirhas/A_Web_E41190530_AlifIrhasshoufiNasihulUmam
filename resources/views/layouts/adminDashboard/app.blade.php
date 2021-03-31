<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('head')

    <title>@yield('title')</title>
</head>

<body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">

        @yield('navigation')

        <div class="relative md:ml-64 bg-blueGray-50">
            @yield('header')

            <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">

                @yield('card')
                
            </div>

                <div class="px-4 md:px-10 mx-auto w-full -m-24">

                    @yield('main')

                </div>
            </div>

        </div>

</body>

@yield('script')

</html>