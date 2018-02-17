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
                <h1 class="h5">Mark Stephen</h1>
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
            <li><a href="#formsDropdown" aria-expanded="true" data-toggle="collapse"> <i class="icon-padnote"></i>Forms
                </a>
                <ul id="formsDropdown" class="collapse list-unstyled show">
                    <li><a href="{{ url('/forms') }}">Basic forms</a></li>
                    <li class="active"><a href="{{ url('/forms-advanced') }}">Advanced forms</a></li>
                    <li><a href="{{ url('/forms-autocomplete') }}">Autocomplete</a></li>
                    <li><a href="{{ url('/forms-texteditor') }}">Text editor</a></li>
                    <li><a href="{{ url('/forms-dropzone') }}">Files upload</a></li>
                </ul>
            </li>
            <li><a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse"> <i
                            class="icon-light-bulb"></i>Components </a>
                <ul id="componentsDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('/components-cards') }}">Cards</a></li>
                    <li><a href="{{ url('/components-calendar') }}">Calendar</a></li>
                    <li><a href="{{ url('/components-gallery') }}">Gallery</a></li>
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
                <h2 class="h5 no-margin-bottom">Advanced forms</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Advanced forms</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- No UI Slider-->
                        <div class="block">
                            <div class="title"><strong class="d-block">No UI Slider</strong><span class="d-block">Read more about this component at <a
                                            href="https://refreshless.com/nouislider/">https://refreshless.com/nouislider/</a>.</span>
                            </div>
                            <div class="block-body">
                                <form>
                                    <div class="nouislider">
                                        <div id="basicNoUISlider"></div>
                                    </div>
                                    <div class="nouislider mt-5">
                                        <div id="stepNoUISlider"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Bootstrap Select-->
                        <div class="block">
                            <div class="title"><strong class="d-block">Bootstrap Select</strong><span class="d-block">Read more about Bootstrap Select at <a
                                            href="https://silviomoreto.github.io/bootstrap-select/">https://silviomoreto.github.io/bootstrap-select/</a>.</span>
                            </div>
                            <div class="block-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 1</label>
                                        <div class="col-sm-9">
                                            <select data-style="btn-primary" class="selectpicker">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 2 - Secondary</label>
                                        <div class="col-sm-9">
                                            <select data-style="btn-secondary" class="selectpicker">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 3 - Light</label>
                                        <div class="col-sm-9">
                                            <select data-style="btn-outline-light" title="Choose one of the following"
                                                    class="selectpicker">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- jQuery Multiselect-->
                        <div class="block">
                            <div class="title"><strong class="d-block">jQuery Multiselect</strong><span class="d-block">jQuery Multiselect is a user-friendlier drop-in replacement for the standard <code>&lt;select&gt;</code> with multiple attribute activated. Read more about jQuery Multiselect at <a
                                            href="http://loudev.com/">http://loudev.com/</a>.</span></div>
                            <div class="block-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Multiselect - simple with pre-selected
                                            values</label>
                                        <select id="multiselect1" multiple="multiple" name="multiselect1[]">
                                            <option value="Baker" selected>Baker</option>
                                            <option value="Independence">Independence</option>
                                            <option value="Emerald">Emerald</option>
                                            <option value="Beyerville">Beyerville</option>
                                            <option value="Vallonia">Vallonia</option>
                                            <option value="Weogufka" selected>Weogufka</option>
                                            <option value="Catherine">Catherine</option>
                                            <option value="Healy">Healy</option>
                                            <option value="Coalmont">Coalmont</option>
                                            <option value="Glenville">Glenville</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Datepickers-->
                        <div class="block">
                            <div class="title"><strong class="d-block">Datepicker</strong><span class="d-block">Read more about Bootstrap Datepicker at <a
                                            href="https://github.com/uxsolutions/bootstrap-datepicker">https://github.com/uxsolutions/bootstrap-datepicker</a>.</span>
                            </div>
                            <div class="block-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 1 - Date</label>
                                        <input type="text" value="10/20/2017" class="form-control input-datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 2 - Autoclose</label>
                                        <input type="text" value="06/22/1980"
                                               class="form-control input-datepicker-autoclose">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 3 - Multiple dates</label>
                                        <input type="text" class="form-control input-datepicker-multiple">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Bootstrap Touchspin-->
                        <div class="block">
                            <div class="title"><strong class="d-block">Bootstrap Touchspin</strong><span
                                        class="d-block">Read more about Touchspin at <a
                                            href="https://www.virtuosoft.eu/code/bootstrap-touchspin/">https://www.virtuosoft.eu/code/bootstrap-touchspin/</a>.</span>
                            </div>
                            <div class="block-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="touchspin0" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="55.50" name="touchspin1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Variant 3</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="1500" name="touchspin2" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Bootstrap Tags Input-->
                        <div class="block">
                            <div class="title"><strong class="d-block">Bootstrap Tags Input</strong><span
                                        class="d-block">Read more about Tags Input at <a
                                            href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/">https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/</a>.</span>
                            </div>
                            <div class="block-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 1 - As an
                                            <code>&lt;input&gt;</code></label>
                                        <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput"
                                               placeholder="Add tags">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 2 - As a
                                            <code>&lt;select&gt;</code></label>
                                        <select multiple="" data-role="tagsinput">
                                            <option value="Amsterdam">Amsterdam</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap Input Masks-->
                <div class="block">
                    <div class="title"><strong class="d-block">Bootstrap Input Masks</strong></div>
                    <div class="block-body">
                        <p>Input masks can be used to force the user to enter data conform a specific format. Unlike
                            validation, the user can't enter any other key than the ones specified by the mask.</p>
                        <p class="mb-4">Read more about Bootstrap Input Masks at <a
                                    href="http://www.jasny.net/bootstrap/javascript/">http://www.jasny.net/bootstrap/javascript/</a>.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ISBN 1</label>
                                    <input type="text" placeholder="" data-mask="999-99-999-9999-9"
                                           class="form-control">
                                    <small class="help-block-none">e.g &quot;999-99-999-9999-9&quot;</small>
                                </div>
                                <div class="form-group">
                                    <label>ISBN 2</label>
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9"
                                           class="form-control">
                                    <small class="help-block-none">999 99 999 9999 9</small>
                                </div>
                                <div class="form-group">
                                    <label>ISBN 3</label>
                                    <input type="text" placeholder="" data-mask="999/99/999/9999/9"
                                           class="form-control">
                                    <small class="help-block-none">999/99/999/9999/9</small>
                                </div>
                                <div class="form-group">
                                    <label>IPV4</label>
                                    <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                    <small class="help-block-none">192.168.110.310</small>
                                </div>
                                <div class="form-group">
                                    <label>IPV6</label>
                                    <input type="text" placeholder="" data-mask="wwww:wwww:wwww:w:www:wwww:wwww:wwww"
                                           class="form-control">
                                    <small class="help-block-none">4deg:1340:6547:2:540:h8je:ve73:98pd</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tax ID</label>
                                    <input type="text" placeholder="" data-mask="99-9999999" class="form-control"><span
                                            class="font-13 text-muted">99-9999999</span>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" data-mask="(999) 999-9999"
                                           class="form-control"><span class="font-13 text-muted">(999) 999-9999</span>
                                </div>
                                <div class="form-group">
                                    <label>Currency</label>
                                    <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control"><span
                                            class="font-13 text-muted">$ 999,999,999.99</span>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" placeholder="" data-mask="99/99/9999" class="form-control"><span
                                            class="font-13 text-muted">dd/mm/yyyy</span>
                                </div>
                                <div class="form-group m-b-0">
                                    <label>Date 2</label>
                                    <input type="text" placeholder="" data-mask="99-99-9999" class="form-control"><span
                                            class="font-13 text-muted">dd-mm-yyyy </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/forms-advanced.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection