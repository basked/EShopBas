@section('css')
    <link href="{{ asset('css/dark-admin/css/font.css') }}" rel="stylesheet">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link href="{{ asset('css/style.default.premium.css') }}" rel="stylesheet" id="theme-stylesheet">
    <link id="new-stylesheet" rel="stylesheet" href="{{ asset('css/style.default.premium.css') }}">
    <link href="{{ asset('css/dark-admin/css/custom.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

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
@endsection
@section('sidebar')
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img
                        src="{{asset('css/dark-admin/img/avatar-6.jpg') }}"
                        alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li><a href="{{ url('/dashboard') }}"> <i class="icon-home"></i>Home </a></li>
            <li class="active"><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i
                            class="icon-grid"></i>Tables
                </a>
                <ul id="tablesDropdown" class="collapse list-unstyled">
                    <li><a href="{{ url('/tables') }}">Bootstrap tables</a></li>
                    <li><a href="{{ url('/datatables') }}">Datatable</a></li>
                </ul>
            </li>
            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i
                            class="fa fa-bar-chart"></i>Charts </a>
                <ul id="chartsDropdown" class="collapse list-unstyled">
                    <li><a href="{{ url('/charts') }}">Charts</a></li>
                    <li><a href="{{ url('/charts-gauge') }}">Gauge + Sparkline</a></li>
                </ul>
            </li>
            <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms
                </a>
                <ul id="formsDropdown" class="collapse list-unstyled">
                    <li><a href="{{ url('/forms') }}">Basic forms</a></li>
                    <li><a href="{{ url('/forms-advanced') }}">Advanced forms</a></li>
                    <li><a href="{{ url('/forms-autocomplete') }}">Autocomplete</a></li>
                    <li><a href="{{ url('/forms-texteditor') }}">Text editor</a></li>
                    <li ><a href="{{ url('/forms-dropzone') }}">Files upload</a></li>
                </ul>
            </li>
            <li><a href="#componentsDropdown" aria-expanded="true" data-toggle="collapse"> <i
                            class="icon-light-bulb"></i>Components </a>
                <ul id="componentsDropdown" class="collapse list-unstyled show ">
                    <li><a href="{{ url('/components-cards') }}">Cards</a></li>
                    <li><a href="{{ url('/components-calendar') }}">Calendar</a></li>
                    <li><a href="{{ url('/components-gallery') }}">Gallery</a></li>
                    <li class="active"><a href="{{ url('/components-notifications') }}">Notifications</a></li>
                    <li><a href="{{ url('/components-loading-buttons') }}">Loading buttons</a></li>
                    <li><a href="{{ url('/components-preloader') }}">Preloaders</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/dashboard')}}"> <i class="icon-logout"></i>Login page </a></li>
        </ul>
        <span class="heading">Extras</span>
        <ul class="list-unstyled">
            <li><a href="#"> <i class="icon-settings"></i>Demo </a></li>
            <li><a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
            <li><a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
    </nav>
    <!-- Sidebar Navigation end-->
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Notifications</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Notifications            </li>
            </ul>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="block">
                            <div class="title"><strong>Notifications</strong></div>
                            <p>This template uses Hubspot Messenger notifications to show user messages. Hubspot Messenger is a JavaScript library for Gnome / Growl type non-blocking notifications. <a href="http://github.hubspot.com/messenger/docs/welcome/">See the docs</a>.</p>
                            <p>
                                <button id="demoMessage" class="btn btn-success">Success Message</button>
                            </p>
                            <p>
                                <button id="demoMessage2" class="btn btn-danger">Error Message</button>
                            </p>
                            <p>
                                <button id="demoMessage3" class="btn btn-info">Info Message</button>
                            </p>
                            <p>
                                <button id="demoMessage4" class="btn btn-danger">Error Message with delayed action                                       </button>
                            </p>
                            <p>
                                <button id="demoMessage5" class="btn btn-info">Info Message with buttons </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/components-notifications.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection