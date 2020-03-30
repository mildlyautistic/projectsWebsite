<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Symon Kibaru">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Authentication </title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <main-app></main-app>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>