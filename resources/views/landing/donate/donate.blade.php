@include('landing.template.header')

<body>
    <div class="boxed blog">

        <!-- Preloader -->
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
        </div>

        <div class="flat-header-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="top-header1">
                                    <div class="top-header-inner">
                                        <div class="top-bar-left">
                                            <span class="top-location">Gajayana Stadium 3rd Floor (Jl. Tangkuban Perahu,
                                                Kauman), Malang</span>
                                            <span class="top-mail">semakinbaikbumi@gmail.com </span>
                                        </div>
                                        <div class="top-bar-right">
                                            <ul class="widgets-nav-social">
                                                <li><a href="#"><i class="fa fa-whatsapp"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-instagram"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                                            <a href="index.html" title="">Home</a>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="about.html" title="">About</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ url('/about') }}" title="">About
                                                                        Us</a></li>
                                                                <li><a href="team.html" title="">Team</a></li>
                                                                <li><a href="faq.html" title="">Faq</a></li>
                                                            </ul>
                                                            <!-- /.sub-menu -->
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="services.html" title="">Services</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="services.html" title="">Services</a>
                                                                </li>
                                                                <li><a href="service-details.html"
                                                                        title="">Service Details</a></li>
                                                            </ul>
                                                            <!-- /.sub-menu -->
                                                        </li>

                                                        <li class="menu-item-has-children">
                                                            <a href="blog.html" title="">Blog</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="blog.html" title="">Blog Standard</a>
                                                                </li>
                                                                <li><a href="blog-detail.html" title="">Blog
                                                                        Detail</a></li>
                                                            </ul>
                                                            <!-- /.sub-menu -->
                                                        </li>
                                                        <li>
                                                            <a href="contact.html" title="">Contact</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
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
        <section class="flat-why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="item-three-column mg-bottom-60 wow fadeInLeft">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-1.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon-fruit-box"></span>
                                <div class="content-features">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Landscaping</h3>
                                    </a>
                                    <h6 class="section-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="service-details.html" class="read-more btn-read-more">Donasi</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-2.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon2 icon-hanging-bot"></span>
                                <div class="content-features">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Pruning plants</h3>
                                    </a>
                                    <h6 class="section-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="service-details.html" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInRight">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-3.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon3 icon-spray"></span>
                                <div class="content-features">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Lawn Maintenance</h3>
                                    </a>
                                    <h6 class="section-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="service-details.html" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInLeft">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-1.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon-fruit-box"></span>
                                <div class="content-features">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
                                    </div>
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Landscaping</h3>
                                    </a>
                                    <h6 class="section-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="service-details.html" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-2.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon2 icon-hanging-bot"></span>
                                <div class="content-features">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
                                    </div>
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Pruning plants</h3>
                                    </a>
                                    <h6 class="section-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="service-details.html" class="read-more btn-read-more">Read More</a>
                            </div>
                        </article>
                    </div>
                    <div class="item-three-column mg-bottom-60 wow fadeInRight">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="images/why-choose-us/artical-post-3.jpg" alt="images">
                            </div>
                            <div class="features-box">
                                <span class="tf-icon icon3 icon-spray"></span>
                                <div class="content-features">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">Lawn Maintenance</h3>
                                    </a>
                                    <h6 class="section-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo</h6>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="service-details.html" class="read-more btn-read-more">Read More</a>
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