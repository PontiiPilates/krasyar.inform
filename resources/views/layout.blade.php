<!doctype html>
<html lang="ru">

<head>

    @include('components.head')

    <title>App Name - @yield('title')</title>

</head>

<body>

    <div class="container">
        @include('components.header')
    </div>

    <div class="container">
        @yield('content')
    </div>

    @include('components.scripts')

</body>

</html>