<!doctype html>
<html lang="ru">

<head>

    @include('components.head')

    <title>App Name - @yield('title')</title>

</head>

<body data-bs-theme="dark">

    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
        <div class="container">
            @include('components.header')
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    @include('components.scripts')

</body>

</html>
