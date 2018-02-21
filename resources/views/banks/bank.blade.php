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
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Курсы валют</li>

                    </ul>
                </div>
                <div class="col-lg-2">
                    <div class="dropdown show ">
                        <a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Обновить
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{url('/banks_parse')}}">Банки</a>
                            <a class="dropdown-item" href="{{url('/bank_offices_parse')}}">Офисы</a>
                            <a class="dropdown-item" href="{{url('/bank_atms_parse')}}">Банкоматы</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/bank_kurses_parse')}}">Курсы валют</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>{{$name}}</strong> <span class="badge badge-light">{{$cnt}}</span></div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Отделение банка</th>
                                        <th>Покупка</th>
                                        <th>Продажа</th>
                                        <th>Валюта</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($bankKurses as $bankKurs)
                                        <tr>
                                            <td>{{\App\BankOffice::findOrFail($bankKurs->bank_offices_id)->name}}</td>
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