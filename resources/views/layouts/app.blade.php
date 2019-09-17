<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Laravel Vue</title>
    @include('components.stylesheet')

    @section('css')
    @show
</head>
<body>
    @include('components.header')

    <div id="app">
        @yield('content')
    </div>

    @include('components.footer')
    @section('scripts')

    @show

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
