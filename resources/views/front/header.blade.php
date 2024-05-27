<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="{{asset('assets')}}/front/images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="header_information">
                        <nav class="navigation navbar navbar-expand-sm navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('about')}}"> About Us </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('clients')}}">Our Clients</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('our-work')}}">Our Work</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                                    </li>
                                </ul>
                                {{--<div class="sign_btn"><a href="{{route('login')}}">Login</a></div>--}}
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="full">
                        <div class="center-desk">
                            <div style="color: #00aeef" class="">
                                @if(auth()->check())
                                    <a style="font-size: 25px; margin-right: 20px;" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="ourWorkDropdown">
                                        <a class="dropdown-item" href="/user/profile">profile</a>
                                        <a class="dropdown-item" href="/dashboard">dashboard</a>
                                        @if(Auth::user()->isAdmin())
                                            <a class="dropdown-item" href="/admin">AdminPanel</a>
                                        @endif
                                    </div>
                                    {{--<a style="font-size: 20px; !important;" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user-circle"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>--}}
                                @else
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
