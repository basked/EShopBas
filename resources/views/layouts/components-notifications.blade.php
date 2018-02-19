@section('css')
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Notifications</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Notifications            </li>
            </ul>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="block">
                            <div class="title"><strong>Notifications</strong></div>
                            <p>This template uses Hubspot Messenger notifications to show user messages. Hubspot Messenger is a JavaScript library for Gnome / Growl type non-blocking notifications. <a href="http://github.hubspot.com/messenger/docs/welcome/">See the docs</a>.</p>
                            <p>
                                <button id="demoMessage" class="btn btn-success">Success Message</button>
                            </p>
                            <p>
                                <button id="demoMessage2" class="btn btn-danger">Error Message</button>
                            </p>
                            <p>
                                <button id="demoMessage3" class="btn btn-info">Info Message</button>
                            </p>
                            <p>
                                <button id="demoMessage4" class="btn btn-danger">Error Message with delayed action                                       </button>
                            </p>
                            <p>
                                <button id="demoMessage5" class="btn btn-info">Info Message with buttons </button>
                            </p>
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