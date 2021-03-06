@section('css')
    <style type="text/css">.jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }</style>

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
@extends('layouts.layout')
@section('content')
    <div class="page-content" style="padding-bottom: 70px;">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Charts - Gauges and Sparklines</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Charts - Gauges and Sparklines</li>
            </ul>
        </div>
        <section>
            <div class="container-fluid">
                <div class="block">
                    <div class="title"><strong>Gauges </strong></div>
                    <p>100% native and cool looking animated JavaScript/CoffeeScript gauge. See more at <a
                                href="http://bernii.github.io/gauge.js/">Gauge.js homepage.</a></p>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <div class="gauge-container">
                                <canvas id="gauge1" class="gauge-canvas" width="375" height="187"
                                        style="width: 300px; height: 150px;"></canvas>
                                <span id="gauge1Value" class="gauge-label">2,081</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gauge-container">
                                <canvas id="gauge2" class="gauge-canvas" width="375" height="187"
                                        style="width: 300px; height: 150px;"></canvas>
                                <span id="gauge2Value" class="gauge-label">2,120</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gauge-container">
                                <canvas id="gauge3" class="gauge-canvas" width="375" height="187"
                                        style="width: 300px; height: 150px;"></canvas>
                                <span id="gauge3Value" class="gauge-label">2,490</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gauge-container">
                                <canvas id="gauge4" class="gauge-canvas" width="375" height="187"
                                        style="width: 300px; height: 150px;"></canvas>
                                <span id="gauge4Value" class="gauge-label">1,308</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="title"><strong>Sparklines</strong></div>
                    <p>This jQuery plugin generates sparklines (small inline charts) directly in the browser using data
                        supplied either inline in the HTML, or via javascript. See more at <a
                                href="https://omnipotent.net/jquery.sparkline/">jQuery Sparklines homepage.</a></p>
                    <div class="row mt-5">
                        <div class="col-lg-6 col-xl-4">
                            <p>Line sparkline<span values="5,6,7,9,9,5,3,2,2,4,6,7,5,6,7,9,9,5,3,2,2,4,6,7"
                                                   class="sparklines"><canvas width="72" height="2"
                                                                              style="display: inline-block; width: 72px; height: 2px; vertical-align: top;"></canvas></span>
                            </p>
                            <p>Bar chart<span values="5,6,7,2,0,-4,-2,4,5,6,7,2,0,-4,-2,4" sparktype="bar"
                                              class="sparklines"><canvas width="79" height="2"
                                                                         style="display: inline-block; width: 79px; height: 2px; vertical-align: top;"></canvas></span>
                            </p>
                            <p>Bar chart stacked<span values="5:10,2:3,7:4,4:3,5:10,2:3,7:4,4:3" sparktype="bar"
                                                      class="sparklines"><canvas width="39" height="2"
                                                                                 style="display: inline-block; width: 39px; height: 2px; vertical-align: top;"></canvas></span>
                            </p>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <p>Box plot chart<span values="5,6,7,9,9,5,3,2,2,4,6,7,5,6,7,9,9,5,3,2,2,4,6,7"
                                                   sparktype="box" class="sparklines"><canvas
                                            style="display: inline-block; width: 64px; height: 2px; vertical-align: top;"
                                            width="64" height="2"></canvas></span></p>
                            <p>Discrete chart<span values="5,6,7,9,9,5,3,2,2,4,6,7" sparktype="discrete" sparkwidth="50"
                                                   class="sparklines"><canvas width="50" height="2"
                                                                              style="display: inline-block; width: 50px; height: 2px; vertical-align: top;"></canvas></span>
                            </p>
                            <p>Pie chart<span values="1,3,5" sparktype="pie" class="sparklines"><canvas width="2"
                                                                                                        height="2"
                                                                                                        style="display: inline-block; width: 2px; height: 2px; vertical-align: top;"></canvas></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/gauge.min.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/charts-gauge-sparkline.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection

    </div>

@endsection