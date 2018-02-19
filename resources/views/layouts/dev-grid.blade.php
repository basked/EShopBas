@section('css')
    <script src="{{ asset('devextreme/js/grid.js') }}"> </script>
    <script src="{{ asset('devextreme/js/devall.js') }}"></script>
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Cards</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Devextrme </li>
            </ul>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="block">
                            <div class="demo-container">
                                <div id="gridContainer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><Adminfooter id="admfooter"></Adminfooter>
        @section('js')

            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection
