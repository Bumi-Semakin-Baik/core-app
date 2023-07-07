@include('landing.template.header')

<body>
<div class="boxed blog">
        <!-- Preloader -->
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
        </div>

        <!-- top header -->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col md-4">
                        <div class="top-bar-left">
                        <p class="top-location">Gajayana Stadium 3rd Floor (Jl. Tangkuban Perahu,
                                                Kauman), Malang</p>
                        </div>
                    </div>
                    <div class="col md-8">
                        <div class="top-bar-right link-style3">
                            <a href="#" class="top-mail">semakinbaikbumi@gmail.com</a>
                            <ul class="widgets-nav-social">
                                <!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
                                <li><a href="https://wa.me/6282130075758" target="_blank" ><i class="fa fa-whatsapp"
                                    aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.top -->

        <!-- header -->
        <header id="header" class="header bg-color">
            <div class="container">
                <div class="row">
                    <div class="header-wrap-home1">
                        <div class="col-md-3 ">
                            <div class="inner-header">
                                <img src="{{ asset('landing/images/home/bumibaik.jpg') }}"
                                    width="100px" alt="images">
                                <!-- /logo -->

                                <div class="btn-menu">
                                    <span></span>
                                </div>
                                <!-- /mobile menu button -->
                            </div>
                        </div>

                        <div class="col-md-9 text-center">
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li>
                                            <a href="{{ url('') }}" title="">Home</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#" title="">About</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('/about') }}" title="">About
                                                        Us</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="{{ url('/service') }}" title="">Services</a>

                                            <!-- /.sub-menu -->
                                        </li>

                                        <li>
                                            <a href="{{ route('get.blog') }}" title="">Blog</a>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="{{ url('/donate') }}" title="">Contact</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/donate') }}" title="">Donate</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- header right -->
                </div>
            </div>

        </header>
        <!-- /header -->