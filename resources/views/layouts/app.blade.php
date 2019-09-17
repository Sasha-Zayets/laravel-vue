<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Laravel Vue</title>
    @include('components.stylesheet')

    @section('css')
    @show

</head>
<body id="app">
    @include('components.header')

    @yield('content')

    @include('components.footer')
    @section('scripts')
    @show
</body>
</html>