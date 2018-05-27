@section('css')
    {{--<link rel="stylesheet" href="{{ asset('devextreme/css/devall.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('devextreme/css/style.css') }}">--}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.6.0/jszip.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/17.2.5/css/dx.spa.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/17.2.5/css/dx.common.css"/>
    <link rel="dx-theme" data-theme="generic.contrast.compact" href="{{ Module::asset('Dev:css/dx.material.orange.light.css')}}" data-active="true">
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">DevExtreme</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">DevExtreme Grid</li>
            </ul>
        </div>
        <section>
            <div class="demo-container">
                <div class="block">
                    <div class="title"><strong class="d-block">DevExpress Grid With DataSource</strong><span
                                class="d-block">Data store as API  <a href="http://eshopbas/dev-grid-data">https://eshop.bas/dev-grid-data</a>.</span>
                    </div>
                    <div class="block-body">
                        <div id="gridContainer"></div>
                    </div>
                </div>


                <div class="block">
                    <div class="title"><strong class="d-block">DevExpress Grid Master Detail With DataSource</strong><span
                                class="d-block">Data store as API  <a href="http://eshopbas/dev-grid-data">https://eshop.bas/dev-grid-data</a>.</span>
                    </div>
                    <div class="block-body">
                        <div id="gridMasterDetailContainer"></div>
                    </div>
                </div>

            </div>
        </section>

        @section('js')
            {{--<script src="{{ asset('devextreme/data/data1.js') }}"></script>--}}
            <script src="{{ asset('devextreme/js/devall.js') }}"></script>
            <script src="{{ asset('devextreme/js/gridData.js') }}"></script>
            {{--<script src="{{ asset('devextreme/js/gridMasterDetailData.js') }}"></script>--}}

            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection