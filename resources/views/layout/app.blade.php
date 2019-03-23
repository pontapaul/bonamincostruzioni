<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@section('title') Bonamincostruzioni @show</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

@section('header')
    @include('layout.header')
@show

@yield('content')

@include('layout.footer')

@section('before-scripts')
@show
<script src="{{ mix('js/app.js') }}"></script>
@section('scripts')
@show
</body>
</html>
