@section('css')
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
                <li class="breadcrumb-item active">Категории</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-12">
                        <div class="block ">
                            <div class="title"><strong class="d-block"> Добавить категорию</strong>
                                @include('blog::admin.dark.errors')
                            </div>
                            <div class="block-body">
                                {!! Form::open(['route'=>'blog-store']) !!}
                                <div class="form-group row">
                                    <div class="col-9">
                                        <label class="form-control-label">Наименование</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <a href="{{route('blog-index')}}" class="btn btn-secondary">Назад</a>
                                        <button type="submit" class="btn btn-primary pull-right">Добавить</button>
                                    </div></button>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/components-notifications.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection