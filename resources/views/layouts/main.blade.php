<!doctype html>
<html lang="zxx">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @include('partials.head')
</head>
<body>

    @include('partials.preloader')
    @include('partials.get-pro')

    @include('partials.header')

    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')
    @include('partials.scripts')

</body>
</html>
