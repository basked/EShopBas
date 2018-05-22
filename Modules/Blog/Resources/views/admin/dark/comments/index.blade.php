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
                <li class="breadcrumb-item"><a href="index">Блог</a></li>
                <li class="breadcrumb-item active">Коментарии</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="block-body text-left">
                    <button type="button" class="btn btn-primary" onclick="window.location='{{route('comments.create')}}'" autofocus>Добавить</button>
                </div>
                <div class="block">
                    <div class="title"><strong>Категории</strong>

                    </div>
                    <div class="block-body">
                        <div class="table-responsive">
                            <table id="datatable1" style="width: 100%;" class="table display responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Text</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->text}}</td>
                                        <td>
                                            <a  href="{{route('comments.edit',$comment->id)}}"
                                               class="fas fa-edit edit"></a>
                                            <span> | </span>
                                            {!! Form::open(['route'=>['comments.destroy',$comment->id],'method'=>'delete']) !!}
                                            <button onclick=" return confirm('Удалить запись?')" type="submit" class="delete">
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