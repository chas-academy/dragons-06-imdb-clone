<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('blocks.head')
<body>
@include('blocks.menu')
@include('blocks.floatbar')
<main id="panel">
@yield('content')
@include('blocks.footer')
</main>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
