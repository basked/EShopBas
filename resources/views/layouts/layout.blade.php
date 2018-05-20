<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dark-admin/css/font.css') }}" rel="stylesheet">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link href="{{ asset('css/style.blue.premium.css') }}" rel="stylesheet" id="theme-stylesheet">
    <link id="new-stylesheet" rel="stylesheet" href="{{ asset('css/style.blue.premium.css') }}">
    <link href="{{ asset('css/dark-admin/css/custom.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('css/dark-admin/img/favicon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style type="text/css">/* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }</style>

    @yield('css')
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


</head>
<body class="dx-viewport">
<header class="header">
<!-- Megamenu-->
    @include('layouts.nav-mega')
</header>
<div class="d-flex align-items-stretch">

@include('layouts.nav')

@yield('sidebar')
<!--Dashboard -->
@yield('content')
<!--Vue Component <Admindashboard id="admin-dashboard"></Admindashboard>-->
    <!--Dashboard End-->

    <Adminfooter id="admfooter"></Adminfooter>
</div>
<button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button"
        class="btn btn-primary btn-sm d-none d-md-inline-block"><i class="fa fa-cog fa-2x"></i></button>
<div id="style-switch" class="collapse">
    <h5 class="mb-3">Select theme colour</h5>
    <form class="mb-3">
        <select name="colour" id="colour" class="form-control">
            <option value="">select colour variant</option>
            <option value="default.premium">pink</option>
            <option value="red.premium">red</option>
            <option value="green.premium">green</option>
            <option value="violet.premium">violet</option>
            <option value="sea.premium">sea</option>
            <option value="blue.premium">blue</option>
        </select>
    </form>
    <p><img src="{{ asset('css/dark-admin/img/template-mac.png') }}" alt=""
            class="img-fluid"></p>
    <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads.
        This will not happen in your production code.</p>
</div>

<!-- JavaScript files-->

<script src="{{ asset('js/app.js') }}"></script>

@yield('js')


</body>
</html>