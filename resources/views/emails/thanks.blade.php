<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('utils/style.css')}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ease') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Remerciements</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-success" role="alertdialog">
            Merci, nous vous contacterons bientot !
        </div>
    </div>
</body>
</html>
