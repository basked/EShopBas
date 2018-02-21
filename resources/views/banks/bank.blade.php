@section('css')
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Tables</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Tables {{$name}}</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Striped Table</strong></div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Покупка</th>
                                        <th>Продажа</th>
                                        <th>Валюта</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($bankKurses as $bankKurs)
                                        <tr>
                                            <td>{{$bankKurs->pokupka}}</td>
                                            <td>{{$bankKurs->prodaja}}</td>
                                            <td>{{$bankKurs->currencies}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection

    </div>
@endsection