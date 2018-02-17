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
            <li><a href="#chartsDropdown" aria-expanded="true" data-toggle="collapse"> <i
                            class="fa fa-bar-chart"></i>Charts </a>
                <ul id="chartsDropdown" class="collapse list-unstyled show">
                    <li class="active"><a href="{{ url('/charts') }}">Charts</a></li>
                    <li><a href="{{ url('/charts-gauge') }}">Gauge + Sparkline</a></li>
                </ul>
            </li>
            <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms
                </a>
                <ul id="formsDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('/forms') }}">Basic forms</a></li>
                    <li><a href="{{ url('/forms-advanced') }}">Advanced forms</a></li>
                    <li><a href="{{ url('/forms-autocomplete') }}">Autocomplete</a></li>
                    <li><a href="{{ url('/forms-texteditor') }}">Text editor</a></li>
                    <li><a href="{{ url('/forms-dropzone') }}">Files upload</a></li>
                </ul>
            </li>
            <li><a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse"> <i
                            class="icon-light-bulb"></i>Components </a>
                <ul id="componentsDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('/components-cards') }}">Cards</a></li>
                    <li><a href="{{ url('/components-calendar') }}">Calendar</a></li>
                    <li><a href="{{ url('/components-gallery') }}">Gallery</a></li>
                    <li><a href="{{ url('/components-notifications') }}">Notifications</a></li>
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
            <h2 class="h5 no-margin-bottom">Charts</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Charts            </li>
        </ul>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="line-chart block chart">
                        <div class="title"><strong>Line Chart Example</strong></div>
                        <canvas id="lineChartCustom1"></canvas>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="lin-chart block chart">
                        <div class="title"><strong>Line Chart Example</strong></div>
                        <div class="line-chart chart margin-bottom-sm">
                            <canvas id="lineChartCustom2"></canvas>
                        </div>
                        <div class="line-chart chart">
                            <canvas id="lineChartCustom3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chart block">
                        <div class="title"> <strong>Bar Chart Example</strong></div>
                        <div class="bar-chart chart margin-bottom-sm">
                            <canvas id="barChartCustom1"></canvas>
                        </div>
                        <div class="bar-chart chart">
                            <canvas id="barChartCustom2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bar-chart block chart">
                        <div class="title"><strong>Bar Chart Example</strong></div>
                        <div class="bar-chart chart">
                            <canvas id="barChartCustom3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pie-chart chart block">
                        <div class="title"><strong>Pie Chart Example</strong></div>
                        <div class="pie-chart chart margin-bottom-sm">
                            <canvas id="pieChartCustom1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="doughnut-chart chart block">
                        <div class="title"><strong>Pie Chart Example</strong></div>
                        <div class="doughnut-chart chart margin-bottom-sm">
                            <canvas id="doughnutChartCustom1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="polar-chart chart block">
                        <div class="title"><strong>Polar Chart Example</strong></div>
                        <div class="polar-chart chart margin-bottom-sm">
                            <canvas id="polarChartCustom"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="radar-chart chart block">
                        <div class="title"><strong>Radar Chart Example</strong></div>
                        <div class="radar-chart chart margin-bottom-sm">
                            <canvas id="radarChartCustom"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/charts-custom.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/home-premium.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
</div>
@endsection