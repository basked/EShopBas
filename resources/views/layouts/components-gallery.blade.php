@section('css')
    <link href="{{ asset('css/dark-admin/css/font.css') }}" rel="stylesheet">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link href="{{ asset('css/style.default.premium.css') }}" rel="stylesheet" id="theme-stylesheet">
    <link id="new-stylesheet" rel="stylesheet" href="{{ asset('css/style.default.premium.css') }}">
    <link href="{{ asset('css/dark-admin/css/custom.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <style type="text/css">/* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }</style>
@endsection
@section('sidebar')
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img
                        src="{{asset('css/dark-admin/img/avatar-6.jpg') }}"
                        alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Dzmitry Misiulia</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li><a href="{{ url('/dashboard') }}"> <i class="icon-home"></i>Home </a></li>
            <li class="active"><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i
                            class="icon-grid"></i>Tables
                </a>
                <ul id="tablesDropdown" class="collapse list-unstyled">
                    <li><a href="{{ url('/tables') }}">Bootstrap tables</a></li>
                    <li><a href="{{ url('/datatables') }}">Datatable</a></li>
                </ul>
            </li>
            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i
                            class="fa fa-bar-chart"></i>Charts </a>
                <ul id="chartsDropdown" class="collapse list-unstyled">
                    <li><a href="{{ url('/charts') }}">Charts</a></li>
                    <li><a href="{{ url('/charts-gauge') }}">Gauge + Sparkline</a></li>
                </ul>
            </li>
            <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms
                </a>
                <ul id="formsDropdown" class="collapse list-unstyled">
                    <li><a href="{{ url('/forms') }}">Basic forms</a></li>
                    <li><a href="{{ url('/forms-advanced') }}">Advanced forms</a></li>
                    <li><a href="{{ url('/forms-autocomplete') }}">Autocomplete</a></li>
                    <li><a href="{{ url('/forms-texteditor') }}">Text editor</a></li>
                    <li><a href="{{ url('/forms-dropzone') }}">Files upload</a></li>
                </ul>
            </li>
            <li><a href="#componentsDropdown" aria-expanded="true" data-toggle="collapse"> <i
                            class="icon-light-bulb"></i>Components </a>
                <ul id="componentsDropdown" class="collapse list-unstyled show ">
                    <li><a href="{{ url('/components-cards') }}">Cards</a></li>
                    <li><a href="{{ url('/components-calendar') }}">Calendar</a></li>
                    <li class="active"><a href="{{ url('/components-gallery') }}">Gallery</a></li>
                    <li><a href="{{ url('/components-notifications') }}">Notifications</a></li>
                    <li><a href="{{ url('/components-loading-buttons') }}">Loading buttons</a></li>
                    <li><a href="{{ url('/components-preloader') }}">Preloaders</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/dashboard')}}"> <i class="icon-logout"></i>Login page </a></li>
        </ul>
        <span class="heading">Extras</span>
        <ul class="list-unstyled">
            <li><a href="#"> <i class="icon-settings"></i>Demo </a></li>
            <li><a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
            <li><a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
    </nav>
    <!-- Sidebar Navigation end-->
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Gallery</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ul>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1063" data-lightbox="gallery"
                                             data-title="Image 1063"><img src="https://picsum.photos/300/200?image=1063"
                                                                          alt="Image 1063" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1063</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1076" data-lightbox="gallery"
                                             data-title="Image 1076"><img src="https://picsum.photos/300/200?image=1076"
                                                                          alt="Image 1076" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1076</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1061" data-lightbox="gallery"
                                             data-title="Image 1061"><img src="https://picsum.photos/300/200?image=1061"
                                                                          alt="Image 1061" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1061</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1054" data-lightbox="gallery"
                                             data-title="Image 1054"><img src="https://picsum.photos/300/200?image=1054"
                                                                          alt="Image 1054" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1054</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1044" data-lightbox="gallery"
                                             data-title="Image 1044"><img src="https://picsum.photos/300/200?image=1044"
                                                                          alt="Image 1044" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1044</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1050" data-lightbox="gallery"
                                             data-title="Image 1050"><img src="https://picsum.photos/300/200?image=1050"
                                                                          alt="Image 1050" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1050</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1033" data-lightbox="gallery"
                                             data-title="Image 1033"><img src="https://picsum.photos/300/200?image=1033"
                                                                          alt="Image 1033" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1033</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1018" data-lightbox="gallery"
                                             data-title="Image 1018"><img src="https://picsum.photos/300/200?image=1018"
                                                                          alt="Image 1018" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1018</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1006" data-lightbox="gallery"
                                             data-title="Image 1006"><img src="https://picsum.photos/300/200?image=1006"
                                                                          alt="Image 1006" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1006</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=993" data-lightbox="gallery"
                                             data-title="Image 993"><img src="https://picsum.photos/300/200?image=993"
                                                                         alt="Image 993" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 993</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=980" data-lightbox="gallery"
                                             data-title="Image 980"><img src="https://picsum.photos/300/200?image=980"
                                                                         alt="Image 980" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 980</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1006" data-lightbox="gallery"
                                             data-title="Image 1006"><img src="https://picsum.photos/300/200?image=1006"
                                                                          alt="Image 1006" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1006</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1054" data-lightbox="gallery"
                                             data-title="Image 1054"><img src="https://picsum.photos/300/200?image=1054"
                                                                          alt="Image 1054" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1054</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1044" data-lightbox="gallery"
                                             data-title="Image 1044"><img src="https://picsum.photos/300/200?image=1044"
                                                                          alt="Image 1044" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1044</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1050" data-lightbox="gallery"
                                             data-title="Image 1050"><img src="https://picsum.photos/300/200?image=1050"
                                                                          alt="Image 1050" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1050</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=966" data-lightbox="gallery"
                                             data-title="Image 966"><img src="https://picsum.photos/300/200?image=966"
                                                                         alt="Image 966" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 966</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1033" data-lightbox="gallery"
                                             data-title="Image 1033"><img src="https://picsum.photos/300/200?image=1033"
                                                                          alt="Image 1033" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1033</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card"><a href="https://picsum.photos/1200/800?image=1018" data-lightbox="gallery"
                                             data-title="Image 1018"><img src="https://picsum.photos/300/200?image=1018"
                                                                          alt="Image 1018" class="img-fluid"></a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Image 1018</h6>
                                <p class="card-text text-small text-muted">Image sample text</p>
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