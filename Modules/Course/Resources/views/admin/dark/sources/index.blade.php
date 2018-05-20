@section('css')
    <link href="{{ asset('css/dark-admin/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dark-admin/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <style>

        table.table form {
            display: inline-block;
        }

        a.edit {
            background: transparent;
            border: none;
            text-decoration: none;
            padding: 0px;
        }

        button.delete {
            background: transparent;
            border: none;
            color: #dc3545;
            padding: 0px;
        }
    </style>
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Блог</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Видео курсы</a></li>
                <li class="breadcrumb-item active">Источники</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="block-body text-left">
                    <a type="button" href="{{route('sources-parse')}}"
                       class="btn btn-primary text-right">Обновить
                    </a>
                </div>
                <div class="block">
                    <div class="title"><strong>Источники</strong>

                    </div>
                    <div class="block-body">
                        <div class="table-responsive">
                            <table id="datatable1" style="width: 100%;" class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($sources as $source)
                                    <tr>
                                        <td>{{$source->id}}</td>
                                        <td><a target="_blank" href="{{$source->link}}">{{$source->name}}</a>
                                        </td>
                                        <td>{{$source->slug}}</td>
                                        <td>
                                            @switch($source->status)
                                                @case(1)
                                                Новая
                                                @break
                                                @case(2)
                                                Активна
                                                @break
                                                @case(3)
                                                Неактивна
                                                @break
                                            @endswitch
                                        </td>
                                        <td>
                                            {!! Form::open(['route'=>['sources.destroy',$source->id],'method'=>'delete']) !!}
                                            <button onclick=" return confirm('Удалить запись?')" type="submit"
                                                    class="delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/tables-datatable.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection