<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="padding: 15px;">
    <img src="/images/logo.png" class="uk-margin-small-right" alt="Bonamincostruzioni" width="50px">

    @yield('content')
</div>
</body>
</html>
