<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('blocks.head')
<body>
@include('blocks.menu')
@include('blocks.floatbar')
<main id="panel">
@yield('content')
</main>
@include('blocks.footer')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
