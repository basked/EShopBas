@section('css')
@endsection
@extends('layouts.layout')
@section('content')
    <div class="page-content" style="padding-bottom: 70px;">
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
                    <div class="col-md-6 col-lg-3">
                        <!-- Simple card-->
                        <div class="card"><img src="{{asset('css/dark-admin/img/mockup1.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="#" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card"><img src="{{asset('css/dark-admin/img/mockup3.jpg') }}"  alt="Card image cap" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Vice tote bag shabby chic  </li>
                                <li class="list-group-item">Portland Etsy craft beer</li>
                            </ul>
                            <div class="card-body"><a href="#" class="card-link">Card link</a><a href="#" class="card-link">Another link here</a></div>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card"><img src="{{asset('css/dark-admin/img/mockup4.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            </div><img src="{{asset('css/dark-admin/img/mockup5.jpg') }}" alt="Card image cap" class="img-fluid">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="#" class="card-link">Card link</a><a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Featured</div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-outline-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">2 days ago</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Featured</div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-dark">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">2 days ago</div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card"><img src="{{asset('css/dark-admin/img/mockup6.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div><img src="{{asset('css/dark-admin/img/mockup7.jpg') }}" alt="Card image cap" class="card-img-bottom img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-inverse text-white"><img src="{{asset('css/dark-admin/img/mockup4.jpg') }}" alt="Card image" class="card-img img-fluid">
                            <div class="card-img-overlay card-img-overlay-opacity">
                                <h5 class="card-title text-white">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text"><small>Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
                <h4 class="mt-5 mb-4">Background variants</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary">
                            <div class="card-header card-header-transparent">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-secondary">
                            <div class="card-header card-header-transparent">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Secondary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-success">
                            <div class="card-header card-header-transparent">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Success card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-danger">
                            <div class="card-header card-header-transparent">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Danger card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-warning">
                            <div class="card-header card-header-transparent">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Warning card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-info">
                            <div class="card-header card-header-transparent">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Info card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-header card-header-transparent">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Light card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-dark">
                            <div class="card-header card-header-transparent">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
                <h4 class="mt-5 mb-4">Groups</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="card-group">
                            <div class="card"><img src="{{asset('css/dark-admin/img/mockup4.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card"><img src="{{asset('css/dark-admin/img/mockup3.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card"><img src="{{asset('css/dark-admin/img/mockup1.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
                <h4 class="mt-5 mb-4">Decks</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="card-deck-wrapper">
                            <div class="card-deck">
                                <div class="card"><img src="{{asset('css/dark-admin/img/mockup7.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card"><img src="{{asset('css/dark-admin/img/mockup6.jpg') }}"alt="Card image cap" class="card-img-top img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card"><img src="{{asset('css/dark-admin/img/mockup4.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
                <h4 class="mt-5 mb-4">Columns</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="card-columns">
                            <div class="card"><img src="{{asset('css/dark-admin/img/mockup3.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Card title that wraps to a new line</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="card p-3">
                                <blockquote class="blockquote mb-0 card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer"><small class="text-muted">Someone famous in
                                            <cite title="Source Title">Source Title</cite></small></footer>
                                </blockquote>
                            </div>
                            <div class="card"><img src="{{asset('css/dark-admin/img/mockup2.jpg') }}" alt="Card image cap" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card bg-primary text-white text-center p-3">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                                    <footer class="blockquote-footer text-white"><small>Someone famous in
                                            <cite title="Source Title">Source Title</cite></small></footer>
                                </blockquote>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card p-3 text-right">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer"><small class="text-muted">Someone famous in
                                            <cite title="Source Title">Source Title</cite></small></footer>
                                </blockquote>
                            </div>
                            <div class="card"><img src="{{asset('css/dark-admin/img/mockup6.jpg') }}" alt="Card image cap" class="card-img img-fluid"></div>
                            <div class="card card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
                <h4 class="mt-5 mb-4">Navigation</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link disabled">Disabled</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header pt-2 pb-2">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item"><a href="#" class="nav-link active">Active</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link disabled">Disabled</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row        -->
                <div class="card">
                    <div class="card-header">
                        <h5>Mockups Used here</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li> <a href="https://dribbble.com/shots/2862026-Beauty-Cosmetics-Stationery-Wedding">https://dribbble.com/shots/2862026-Beauty-Cosmetics-Stationery-Wedding</a></li>
                            <li> <a href="https://dribbble.com/shots/1155962-Free-Stationery-Mockup-PSD">https://dribbble.com/shots/1155962-Free-Stationery-Mockup-PSD</a></li>
                            <li> <a href="https://dribbble.com/shots/2569937-Brandminute-Scene-02">https://dribbble.com/shots/2569937-Brandminute-Scene-02</a></li>
                            <li> <a href="https://dribbble.com/shots/1468064-Another-Branding-Mock-Up-Free-PSD">https://dribbble.com/shots/1468064-Another-Branding-Mock-Up-Free-PSD</a></li>
                            <li> <a href="https://dribbble.com/shots/3684230-Letterhead-Mockup">https://dribbble.com/shots/3684230-Letterhead-Mockup</a></li>
                            <li> <a href="https://dribbble.com/shots/2584869-Brandminute-Scene-07">https://dribbble.com/shots/2584869-Brandminute-Scene-07</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
       @section('js')
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection