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
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li {{ Request::is('dashboard') ? "class=active" : '' }}><a href="{{ url('/dashboard') }}"><i
                        class="icon-home"></i>Home </a></li>

        <li><a href="#blog"
               aria-expanded={{ Request::is(['blog/admin/categories*','blog/admin/comments*','blog/admin/posts*','blog/admin/tags*','blog/admin/users*','blog/admin/subscriptions*']) ? 'true' : 'false' }} data-toggle="collapse"><i
                        class="fab fa-blogger-b"></i>Blog
            </a>
            <ul id="blog"
                class="collapse list-unstyled {{ Request::is(['blog/admin/categories*','blog/admin/posts*','blog/admin/tags*','blog/admin/comments*']) ? 'show': '' }}">
                <li {{ Request::is('blog/admin/posts*') ? "class=active" : '' }}><a
                            href="{{ url('blog/admin/posts') }}"><i class="fas fa-sticky-note"></i>Статьи</a></li>

                <li {{ Request::is(['blog/admin/categories*']) ? "class=active" : '' }}><a
                            href="{{ url('blog/admin/categories') }}"><i class="fas fa-list"></i>Категории</a></li>

                <li {{ Request::is('blog/admin/tags*') ? "class=active" : '' }}><a
                            href="{{ url('blog/admin/tags') }}"><i class="fas fa-tags"></i>Тэги</a></li>
                <li {{ Request::is('blog/admin/comments*') ? "class=active" : '' }}><a
                            href="{{ url('blog/admin/comments') }}"><i class="fas fa-comment-alt"></i>Коментарии</a>
                </li>
                <li {{ Request::is('blog/admin/users*') ? "class=active" : '' }}><a
                            href="{{ url('blog/admin/users') }}"><i class="fas fa-users"></i>Пользователи</a>
                </li>
                <li {{ Request::is('blog/admin/subscriptions*') ? "class=active" : '' }}><a
                            href="{{ url('blog/admin/subscriptions') }}"><i class="fas fa-user-plus"></i></i>Подписчики</a>
                </li>

            </ul>
        </li>


        <li><a href="#tablesDropdown"
               aria-expanded={{ Request::is(['tables','datatables']) ? 'true' : 'false' }} data-toggle="collapse"> <i
                        class="icon-grid"></i>Tables
            </a>
            <ul id="tablesDropdown"
                class="collapse list-unstyled {{ Request::is(['tables','datatables']) ? 'show': '' }}">
                <li {{ Request::is('tables') ? "class=active" : '' }}><a href="{{ url('/tables') }}">Bootstrap table</a>
                </li>
                <li {{ Request::is('datatables') ? "class=active" : '' }}><a
                            href="{{ url('/datatables') }}">Datatable</a></li>
            </ul>
        </li>

        <li><a href="#chartsDropdown"
               aria-expanded={{ Request::is(['charts','charts-gauge']) ? 'true' : 'false' }} data-toggle="collapse"> <i
                        class="fa fa-bar-chart"></i>Charts
            </a>
            <ul id="chartsDropdown"
                class="collapse list-unstyled {{ Request::is(['charts','charts-gauge']) ? 'show': '' }}">
                <li {{ Request::is('charts') ? "class=active" : '' }}><a href="{{ url('/charts') }}">Charts</a></li>
                <li {{ Request::is('charts-gauge') ? "class=active" : '' }}><a href="{{ url('/charts-gauge') }}">Gauge +
                        Sparkline</a></li>
            </ul>
        </li>

        <li><a href="#formsDropdown"
               aria-expanded={{ Request::is(['forms','forms-advanced','forms-autocomplete','forms-texteditor','forms-dropzone']) ? 'true' : 'false' }} data-toggle="collapse">
                <i class="icon-padnote"></i>Forms
            </a>
            <ul id="formsDropdown"
                class="collapse list-unstyled {{ Request::is(['forms','forms-advanced','forms-autocomplete','forms-texteditor','forms-dropzone']) ? 'show': '' }}">
                <li {{ Request::is('forms') ? "class=active" : '' }}><a href="{{ url('/forms') }}">Basic forms</a></li>
                <li {{ Request::is('forms-advanced') ? "class=active" : '' }}><a href="{{ url('/forms-advanced') }}">Advanced
                        forms</a></li>
                <li {{ Request::is('forms-autocomplete') ? "class=active" : '' }}><a
                            href="{{ url('/forms-autocomplete') }}">Autocomplete</a></li>
                <li {{ Request::is('forms-texteditor') ? "class=active" : '' }}><a
                            href="{{ url('/forms-texteditor') }}">Text editor</a></li>
                <li {{ Request::is('forms-dropzone') ? "class=active" : '' }}><a href="{{ url('/forms-dropzone') }}">Files
                        upload</a></li>
            </ul>
        </li>
        <li><a href="#componentsDropdown"
               aria-expanded={{ Request::is(['components-cards','components-calendar','components-gallery','components-notifications','components-loading-buttons','components-preloader']) ? 'true' : 'false' }} data-toggle="collapse">
                <i class="icon-light-bulb"></i>Components
            </a>
            <ul id="componentsDropdown"
                class="collapse list-unstyled {{ Request::is(['components-cards','components-calendar','components-gallery','components-notifications','components-loading-buttons','components-preloader']) ? 'show': '' }}">
                <li {{ Request::is('components-cards') ? "class=active" : '' }}><a
                            href="{{ url('/components-cards') }}">Cards</a></li>
                <li {{ Request::is('components-calendar') ? "class=active" : '' }}><a
                            href="{{ url('/components-calendar') }}">Calendar</a></li>
                <li {{ Request::is('components-gallery') ? "class=active" : '' }}><a
                            href="{{ url('/components-gallery') }}">Gallery</a></li>
                <li {{ Request::is('components-notifications') ? "class=active" : '' }}><a
                            href="{{ url('/components-notifications') }}">Notifications</a></li>
                <li {{ Request::is('components-loading-buttons') ? "class=active" : '' }}><a
                            href="{{ url('/components-loading-buttons') }}">Loading buttons</a></li>
                <li {{ Request::is('components-preloader') ? "class=active" : '' }}><a
                            href="{{ url('/components-preloader') }}">Preloaders</a></li>
            </ul>
        </li>
        <li><a href="#devextremeDropdown"
               aria-expanded={{ Request::is(['dev-grid','template']) ? 'true' : 'false' }} data-toggle="collapse"> <i
                        class="icon-light-bulb"></i>Devextreme </a>
            <ul id="devextremeDropdown"
                class="collapse list-unstyled {{ Request::is(['dev-grid','template']) ? 'show' : '' }}">
                <li {{ Request::is('dev-grid') ? "class=active" : '' }}><a href="{{ url('/dev-grid') }}">Grid Custom
                        DataSourse</a></li>
                <li {{ Request::is('template') ? "class=active" : '' }}><a href="{{ url('/template') }}">Grid API</a>
                </li>
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