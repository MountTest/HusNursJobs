<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
@stack('styles')
    <!-- Styles -->

</head>
<body>
<div id="app" class="">
    <main class="">
        @yield('content')
    </main>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<!-- MDB core JavaScript -->
<script>

</script>
@stack('scripts')
</body>
</html>

