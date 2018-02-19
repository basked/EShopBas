@section('css')
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Loading buttons</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Loading buttons            </li>
            </ul>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="block">
                            <div class="title"><strong>Loading Buttons - Ladda</strong></div>
                            <p>A UI concept which merges loading indicators into the action that invoked them. Primarily intended for use with forms where it gives users immediate feedback upon submit rather than leaving them wondering while the browser does its thing.</p>
                            <p>
                                <button data-style="expand-left" class="btn btn-primary ladda-button"><span class="ladda-label">expand-left</span></button>
                                <button data-style="expand-right" class="btn btn-primary ladda-button"><span class="ladda-label">expand-right</span></button>
                                <button data-style="expand-up" class="btn btn-primary ladda-button"><span class="ladda-label">expand-up</span></button>
                                <button data-style="expand-down" class="btn btn-primary ladda-button"><span class="ladda-label">expand-down</span></button>
                            </p>
                            <p>
                                <button data-style="zoom-in" class="btn btn-info ladda-button"><span class="ladda-label">zoom-in</span></button>
                                <button data-style="zoom-out" class="btn btn-info ladda-button"><span class="ladda-label">zoom-out</span></button>
                            </p>
                            <p>
                                <button data-style="slide-left" class="btn btn-warning ladda-button"><span class="ladda-label">slide-left</span></button>
                                <button data-style="slide-right" class="btn btn-warning ladda-button"><span class="ladda-label">slide-right</span></button>
                                <button data-style="slide-up" class="btn btn-warning ladda-button"><span class="ladda-label">slide-up</span></button>
                                <button data-style="slide-down" class="btn btn-warning ladda-button"><span class="ladda-label">slide-down</span></button>
                            </p>
                            <h5>Built-in progress bar</h5>
                            <p class="ladda-progress-demo">
                                <button data-style="expand-right" class="btn btn-danger ladda-button"><span class="ladda-label">expand-right</span></button>
                                <button data-style="expand-left" class="btn btn-danger ladda-button"><span class="ladda-label">expand-left</span></button>
                                <button data-style="slide-right" class="btn btn-danger ladda-button"><span class="ladda-label">slide-right</span></button>
                            </p>
                            <h5>Sizes</h5>
                            <p>
                                <button data-style="expand-right" data-size="s" class="btn btn-primary btn-sm ladda-button"><span class="ladda-label">small</span></button>
                                <button data-style="expand-right" data-size="s" class="btn btn-primary ladda-button"><span class="ladda-label">normal</span></button>
                                <button data-style="expand-right" data-size="l" class="btn btn-primary btn-lg ladda-button"><span class="ladda-label">large     </span></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/components-ladda.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection