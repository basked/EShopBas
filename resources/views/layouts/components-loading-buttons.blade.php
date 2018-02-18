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
                    <li ><a href="{{ url('/components-notifications') }}">Notifications</a></li>
                    <li class="active"><a href="{{ url('/components-loading-buttons') }}">Loading buttons</a></li>
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
                <h2 class="h5 no-margin-bottom">Loading buttons</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Loading buttons            </li>
            </ul>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="block">
                            <div class="title"><strong>Loading Buttons - Ladda</strong></div>
                            <p>A UI concept which merges loading indicators into the action that invoked them. Primarily intended for use with forms where it gives users immediate feedback upon submit rather than leaving them wondering while the browser does its thing.</p>
                            <p>
                                <button data-style="expand-left" class="btn btn-primary ladda-button"><span class="ladda-label">expand-left</span></button>
                                <button data-style="expand-right" class="btn btn-primary ladda-button"><span class="ladda-label">expand-right</span></button>
                                <button data-style="expand-up" class="btn btn-primary ladda-button"><span class="ladda-label">expand-up</span></button>
                                <button data-style="expand-down" class="btn btn-primary ladda-button"><span class="ladda-label">expand-down</span></button>
                            </p>
                            <p>
                                <button data-style="zoom-in" class="btn btn-info ladda-button"><span class="ladda-label">zoom-in</span></button>
                                <button data-style="zoom-out" class="btn btn-info ladda-button"><span class="ladda-label">zoom-out</span></button>
                            </p>
                            <p>
                                <button data-style="slide-left" class="btn btn-warning ladda-button"><span class="ladda-label">slide-left</span></button>
                                <button data-style="slide-right" class="btn btn-warning ladda-button"><span class="ladda-label">slide-right</span></button>
                                <button data-style="slide-up" class="btn btn-warning ladda-button"><span class="ladda-label">slide-up</span></button>
                                <button data-style="slide-down" class="btn btn-warning ladda-button"><span class="ladda-label">slide-down</span></button>
                            </p>
                            <h5>Built-in progress bar</h5>
                            <p class="ladda-progress-demo">
                                <button data-style="expand-right" class="btn btn-danger ladda-button"><span class="ladda-label">expand-right</span></button>
                                <button data-style="expand-left" class="btn btn-danger ladda-button"><span class="ladda-label">expand-left</span></button>
                                <button data-style="slide-right" class="btn btn-danger ladda-button"><span class="ladda-label">slide-right</span></button>
                            </p>
                            <h5>Sizes</h5>
                            <p>
                                <button data-style="expand-right" data-size="s" class="btn btn-primary btn-sm ladda-button"><span class="ladda-label">small</span></button>
                                <button data-style="expand-right" data-size="s" class="btn btn-primary ladda-button"><span class="ladda-label">normal</span></button>
                                <button data-style="expand-right" data-size="l" class="btn btn-primary btn-lg ladda-button"><span class="ladda-label">large     </span></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/components-ladda.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection