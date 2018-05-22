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
                <li class="breadcrumb-item active">Статьи</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-12">
                        <div class="block ">
                            <div class="title"><strong class="d-block">Редактировать статью</strong>
                                @include('blog::admin.dark.errors')
                            </div>
                            <div class="block-body">
                                {!! Form::open(['route'=>['posts.update',$post->id],'method'=>'put']) !!}
                                <input type="hidden" name="user_id" value="{{Auth::id()}}" class="form-control">
                                <div class="form-group row">
                                    <div class="col-10">
                                        <label class="form-control-label">Наименование</label>
                                        <input type="text" name="title" value="{{$post->title}}"
                                               class="form-control" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label class="form-control-label">Дата</label>
                                        <input name='created_at' type="text" value="{{date('m/d/Y')}}"
                                               class="form-control input-datepicker-autoclose">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 ">
                                        <label class="form-control-label">Категория</label>
                                        <select name='category_id' class="selectpicker form-control">
                                            @foreach($categories as $category)
                                                @if($category->id==$post->category_id)
                                                <option value="{{$category->id}}" selected>{{$category->title}}</option>
                                                 @else
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 ">
                                        <label class="form-control-label">Тэги</label>
                                        <select class="selectpicker form-control">
                                            @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <div class="i-checks">
                                            <input name='is_featured' id="checkboxCustom1" type="checkbox" value="{{$post->is_featured}}" checked="true"
                                                   class="checkbox-template">
                                            <label for="checkboxCustom1">Рекомендовать</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <div class="i-checks">

                                            <input name='status' id="checkboxCustom2" type="checkbox" value="{{$post->status}}" checked="false"
                                                   class="checkbox-template">
                                            <label for="checkboxCustom2">Черновик</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label class="form-control-label">Изображение</label>
                                        <input id="fileInput" type="file" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-xl-10">
                                        <label class="form-control-label">Полный текст</label>
                                        <textarea class="summernote" name="content">{{$post->content}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <a href="{{route('posts.index')}}" class="btn btn-secondary">Назад</a>
                                        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/forms-texteditor.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/components-notifications.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection