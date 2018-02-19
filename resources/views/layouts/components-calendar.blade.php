@section('css')
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
                <li class="breadcrumb-item active">Cards            </li>
            </ul>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="block">
                            <div class="title"><strong>Calendar</strong></div>
                            <p>A JavaScript event calendar. Customizable and open source. Display a full-size drag-n-drop event calendar.</p>
                            <p>FullCalendar is great for displaying events, but it isn't a complete solution for event content-management. See more about this great plugin at <a href="https://fullcalendar.io/">fullcalendar.io</a>.</p>
                            <div id="calendar">   </div>
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