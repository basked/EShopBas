<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ Module::asset('ThemeBas:css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ Module::asset('ThemeBas:css/style.css')}}">
    <link rel="stylesheet" href="{{ Module::asset('ThemeBas:fonts/font.css')}}">
    <title>Module ThemeBas</title>
</head>
<body>

<div id="basdiv">
    <basmenu1></basmenu1>
    {{--<basmenu1 id="basdiv"></basmenu1>--}}
    {{--<bastable></bastable>--}}
    <bascontent></bascontent>
    <basfooter></basfooter>


</div>


@yield('content')
<script src="{{ Module::asset('ThemeBas:js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/core.min.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/bootstrap.min.js')}}"></script>
<script src="{{ Module::asset('ThemeBas:js/script.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/jquery.ui.totop.min.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/jquery.rd-navbar.min.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/progressbar.min.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/jquery.countTo.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/jquery.rd-parallax.min.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/jquery.owl-carousel.js') }}"></script>
<script src="{{ Module::asset('ThemeBas:js/jquery.search.min.js') }}"></script>





<script src="{{ Module::asset('ThemeBas:js/popper.min.js') }}"></script>

<script src="{{ Module::asset('ThemeBas:js/tables-datatable.js') }}"></script>








<script src="{{ asset('js/components.js') }}"></script>

</body>
</html>
