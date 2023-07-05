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
                            <p class="top-location">2072 Pinnickinick Street, WA 98370</p>
                        </div>
                    </div>
                    <div class="col md-8">
                        <div class="top-bar-right link-style3">
                            <a href="#" class="top-mail">info@website.com</a>
                            <ul class="widgets-nav-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href ="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.top -->

        <!-- header -->
        <header id="header" class="header header-style2 bg-color">
            <div class="container-fluid">
                <div class="row">
                    <div class="header-wrap">
                        <div class="col-md-3">
                            <div class="inner-header">
                                <div class="logo-header">
                                    <a href="index.html" title="">
                                        <img src="{{ asset('landing/images/home/bumibaik.jpg') }}" alt="images">
                                    </a>
                                </div>
                                <!-- /#logo -->
                                <div class="btn-menu">
                                    <span></span>
                                </div>
                                <!-- //mobile menu button -->
                            </div>

                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-6">
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="menu-item-has-children">
                                            <a href="index.html" title="">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html" title="">Home 01</a></li>
                                                <li><a href="home-2.html" title="">Home 02</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="about.html" title="">About</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html" title="">About Us</a></li>
                                                <li><a href="team.html" title="">Team</a></li>
                                                <li><a href="faq.html" title="">Faq</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="services.html" title="">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="services.html" title="">Services</a></li>
                                                <li><a href="service-details.html" title="">Service Details</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="case-study.html" title="">Case</a>
                                            <ul class="sub-menu">
                                                <li><a href="case-study.html" title="">Case Study</a></li>
                                                <li><a href="case-details.html" title="">Case Details</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="blog.html" title="">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html" title="">Blog Standard</a></li>
                                                <li><a href="blog-detail.html" title="">Blog Detail</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class="current-menu-item">
                                            <a href="contact.html" title="">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="site-header-right">
                                <div class="header-inner">
                                    <div class="search flat-show-search">
                                        <div class="show-search">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div> -->
                                        <!-- <div class="top-search widgets-input">
                                            <form action="get" id="searchform-all"
                                                class="header-search search-form">
                                                <div class="input-group">
                                                    <input type="search" id="s"
                                                        class="search-field"
                                                        placeholder="Search here" aria-label="Search" />
                                                        <button class="search-submit" type="submit" title="Search"></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div> -->
                                    <!-- <div class="cart">
                                        <a href="#" class="cart-btn"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                    <div class="button">
                                        <a href="contact.html" class="btn">Get A Quote</a>
                                    </div> -->
                                </div>
                            </div>
                            <!-- header right -->
                        </div>
                    </div>
                    <!-- /.header-wrap -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </header>

        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title2">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="section-title">
                                Donate
                            </div>
                            <div class="section-subtitle">
                                <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner">Donate</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- Our services -->
        <section class="flat-why-choose-us" id="donat">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="{{ asset('asset/donate1.jpg') }}" alt="images">
                            </div>
                            <div style="padding-left: 18px;">
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Tumbuh Bersama Untuk Bedono</h3>
                                    </a>

                                <div style="margin-top: 1.5rem;">
                                    <small style="color: #111;">UKM Tani: Nganjuk Pride</small>
                                    <div class="progress" style="width: 100%;margin-top: 0.5rem;">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 0.2rem;">
                                        <div class="col-md-6" style="padding-left: 20px;">
                                            <small style="color: #111;"><strong>10.000</strong></small>
                                            <br>
                                            <small style="color: #111;">Pohon terkumpul</small>
                                        </div>
                                        <div class="col-md-6">
                                            <small style="color: #111;float: right;"><strong>7</strong> hari lagi</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="{{ url('donate/2') }}" class="read-more btn-read-more">Donasi</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="{{ asset('asset/donate3.jpg') }}" alt="images">
                            </div>
                            <div style="padding-left: 18px;">
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Paneling for Planting #3</h3>
                                    </a>

                                <div style="margin-top: 1.5rem;">
                                    <small style="color: #111;">UKM Tani: Malang Army</small>
                                    <div class="progress" style="width: 100%;margin-top: 0.5rem;">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 0.2rem;">
                                        <div class="col-md-6" style="padding-left: 20px;">
                                            <small style="color: #111;"><strong>10.000</strong></small>
                                            <br>
                                            <small style="color: #111;">Pohon terkumpul</small>
                                        </div>
                                        <div class="col-md-6">
                                            <small style="color: #111;float: right;"><strong>7</strong> hari lagi</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="{{ url('donate/2') }}" class="read-more btn-read-more">Donasi</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="{{ asset('asset/donate1.jpg') }}" alt="images">
                            </div>
                            <div style="padding-left: 18px;">
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Sedekah Pohon untuk Bumi 2023</h3>
                                    </a>

                                <div style="margin-top: 1.5rem;">
                                    <small style="color: #111;">UKM Tani: Sidoarjo Kuat</small>
                                    <div class="progress" style="width: 100%;margin-top: 0.5rem;">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 0.2rem;">
                                        <div class="col-md-6" style="padding-left: 20px;">
                                            <small style="color: #111;"><strong>15.000</strong></small>
                                            <br>
                                            <small style="color: #111;">Pohon terkumpul</small>
                                        </div>
                                        <div class="col-md-6">
                                            <small style="color: #111;float: right;"><strong>3</strong> hari lagi</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="{{ url('donate/2') }}" class="read-more btn-read-more">Donasi</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="{{ asset('asset/donate3.jpg') }}" alt="images">
                            </div>
                            <div style="padding-left: 18px;">
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Tumbuh Bersama Untuk Bedono</h3>
                                    </a>

                                <div style="margin-top: 1.5rem;">
                                    <small style="color: #111;">UKM Tani: Nganjuk Pride</small>
                                    <div class="progress" style="width: 100%;margin-top: 0.5rem;">
                                        <div class="progress-bar" role="progressbar" style="width:75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 0.2rem;">
                                        <div class="col-md-6" style="padding-left: 20px;">
                                            <small style="color: #111;"><strong>100.000</strong></small>
                                            <br>
                                            <small style="color: #111;">Pohon terkumpul</small>
                                        </div>
                                        <div class="col-md-6">
                                            <small style="color: #111;float: right;"><strong>7</strong> hari lagi</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="{{ url('donate/2') }}" class="read-more btn-read-more">Donasi</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="{{ asset('asset/donate1.jpg') }}" alt="images">
                            </div>
                            <div style="padding-left: 18px;">
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Tumbuh Bersama Untuk Bedono</h3>
                                    </a>

                                <div style="margin-top: 1.5rem;">
                                    <small style="color: #111;">UKM Tani: Nganjuk Pride</small>
                                    <div class="progress" style="width: 100%;margin-top: 0.5rem;">
                                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 0.2rem;">
                                        <div class="col-md-6" style="padding-left: 20px;">
                                            <small style="color: #111;"><strong>10.000</strong></small>
                                            <br>
                                            <small style="color: #111;">Pohon terkumpul</small>
                                        </div>
                                        <div class="col-md-6">
                                            <small style="color: #111;float: right;"><strong>20</strong> hari lagi</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="{{ url('donate/2') }}" class="read-more btn-read-more">Donasi</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="{{ asset('asset/donate3.jpg') }}" alt="images">
                            </div>
                            <div style="padding-left: 18px;">
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Tumbuh Bersama Untuk Bedono</h3>
                                    </a>

                                <div style="margin-top: 1.5rem;">
                                    <small style="color: #111;">UKM Tani: Nganjuk Pride</small>
                                    <div class="progress" style="width: 100%;margin-top: 0.5rem;">
                                        <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 0.2rem;">
                                        <div class="col-md-6" style="padding-left: 20px;">
                                            <small style="color: #111;"><strong>10.000</strong></small>
                                            <br>
                                            <small style="color: #111;">Pohon terkumpul</small>
                                        </div>
                                        <div class="col-md-6">
                                            <small style="color: #111;float: right;"><strong>14</strong> hari lagi</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="{{ url('donate/2') }}" class="read-more btn-read-more">Donasi</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="100" data-smobile="100"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Our service -->

        @include('landing.template.footer')