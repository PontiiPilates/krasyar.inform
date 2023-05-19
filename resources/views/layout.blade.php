<!doctype html>
<html lang="ru">

<head>

    @include('components.head')

    <title>@yield('title')</title>

</head>

<body data-bs-theme="light">

    <nav class="navbar navbar-expand-lg mb-5" style="background-color: #D50032;">
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
