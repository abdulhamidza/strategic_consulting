<header class="main-header">
    <a href="/admin" class="logo"><b>AZ </b>Strategic</a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="">
                    <a href="/admin/messages" class="">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li>
                    <a href="/admin/consultations">
                        <i class="fa fa-flag-o"></i>
                    </a>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{--<img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>--}}
                        @if(auth()->check())
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="height: 60px !important;">
                            @if(auth()->check())
                                <p>
                                    {{ Auth::user()->name }}
                                </p>
                            @else
                                <p>
                                    Alexander Pierce
                                </p>
                            @endif
                        </li>
                        <!-- Menu Body -->
                        {{--<li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>--}}
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="/user/profile" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                {{--<a href="" class="btn btn-default btn-flat">Sign out</a>--}}
                                <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btn btn-default btn-flat">
                                        Sign Out
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
