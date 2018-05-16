@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Dashboard</h2>
            </div>
        </div>

        <section class="no-padding-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="stats-2-block block d-flex">
                            <div class="stats-2 d-flex">
                                <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                                <div class="stats-2-content"><strong class="d-block">5.657</strong><span
                                            class="d-block">Standard Scans</span>
                                    <div class="progress progress-template progress-small">
                                        <div role="progressbar" style="width: 60%;" aria-valuenow="30" aria-valuemin="0"
                                             aria-valuemax="100"
                                             class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="stats-2 d-flex">
                                <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                                <div class="stats-2-content"><strong class="d-block">3.1459</strong><span
                                            class="d-block">Team Scans</span>
                                    <div class="progress progress-template progress-small">
                                        <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0"
                                             aria-valuemax="100"
                                             class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stats-3-block block d-flex">
                            <div class="stats-3"><strong class="d-block">745</strong><span
                                        class="d-block">Total requests</span>
                                <div class="progress progress-template progress-small">
                                    <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0"
                                         aria-valuemax="100"
                                         class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                                </div>
                            </div>
                            <div class="stats-3 d-flex justify-content-between text-center">
                                <div class="item"><strong class="d-block strong-sm">4.124</strong><span
                                            class="d-block span-sm">Threats</span>
                                    <div class="line"></div>
                                    <small>+246</small>
                                </div>
                                <div class="item"><strong class="d-block strong-sm">2.147</strong><span
                                            class="d-block span-sm">Neutral</span>
                                    <div class="line"></div>
                                    <small>+416</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="drills-chart block">
                            <canvas id="lineChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="stats-with-chart-2 block">
                            <div class="title"><strong class="d-block">Credit Sales</strong><span class="d-block">Lorem ipsum dolor sit</span>
                            </div>
                            <div class="piechart chart">
                                <canvas id="pieChartHome1"></canvas>
                                <div class="text"><strong class="d-block">$2.145</strong><span
                                            class="d-block">Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="stats-with-chart-2 block">
                            <div class="title"><strong class="d-block">Channel Sales</strong><span class="d-block">Lorem ipsum dolor sit</span>
                            </div>
                            <div class="piechart chart">
                                <canvas id="pieChartHome2"></canvas>
                                <div class="text"><strong class="d-block">$7.784</strong><span
                                            class="d-block">Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="stats-with-chart-2 block">
                            <div class="title"><strong class="d-block">Direct Sales</strong><span class="d-block">Lorem ipsum dolor sit</span>
                            </div>
                            <div class="piechart chart">
                                <canvas id="pieChartHome3"></canvas>
                                <div class="text"><strong class="d-block">$4.957</strong><span
                                            class="d-block">Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/charts-home.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/home-premium.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection

    </div>
@endsection