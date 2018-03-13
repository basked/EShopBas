<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ Module::asset('ThemeBas:css/bootstrap.min.css')}}">
    <title>Module ThemeBas</title>
</head>
<body>
<div id="basmenu">

    <basmenu id="basmenu"></basmenu>

</div>


@yield('content')
<script src="{{ Module::asset('ThemeBas:js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/bootstrap.min.js')}}"></script>
<script src="{{ Module::asset('ThemeBas:js/popper.min.js') }}"></script>
</body>
</html>
