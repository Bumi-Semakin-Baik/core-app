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

        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title2">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="page-title-heading">
                                Blog Standard
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="#">Home</a></span><span class="page-title-content-inner" style="color: white">Blog Starndard</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- about -->
        <section class="flat-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="117" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-post center bd-radius-50-image">
                            <img class="main-post-about" src="images/home/the-girl-in-the-glasses.jpg" alt="images">
                            <img class="circel-inside" src="{{asset ('landing/images/home/bumibaik.jpg')}}" alt="images">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="about-content-title wow fadeInUp">
                                <div class="section-subtitle">ABOUT US</div>
                                <div class="section-title">The Best Choice For your Business.</div>
                                <div class="section-desc">Lorem Ipsum is simply dummy text of free available market typesetting industry has been the industry's standard dummy text ever. Lorem Ipsum is simply dummy text of free available </div>
                            </div>
                            <div id="about-box" class="about-desc-box">
                                <div class="about-desc">
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-660"></span>
                                        <div class="inner-box">
                                            <a href="#">
                                                <h3 class="section-heading-jost-size20 item-1">
                                                    Best Ui Designer</h3>
                                            </a>
                                            <p class="section-desc">Lorem Ipsum is simply</p>
                                        </div>
                                    </div>
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-661"></span>
                                        <div class="inner-box">
                                            <a href="#">
                                                <h3 class="section-heading-jost-size20 item-2">
                                                    Counter In Work.</h3>
                                            </a>
                                            <p class="section-desc">
                                                Lorem Ipsum is simply</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-desc">
                                    <img class="image" src="images/home/box-flowers-green-garden.jpg" alt="images">
                                </div>
                            </div>
                            <div class="button hover-up">
                                <a href="contact.html" class="btn2">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="134" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about -->

        <!-- about home2 -->
        <section class="flat-about-home2">
            <div class="container-fluid">
                <div class="row">
                    <div class="image-about-home2">
                        <img src="images/home/close-up-planting-flowers-pot.jpg" alt="images">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="themesflat-spacer clearfix" data-desktop="148" data-mobile="60" data-smobile="60"></div>
                                <div class="about-content-left themesflat-counter">
                                    <h5 class="section-subtitle">ABOUT US</h5>
                                    <h2 class="section-title">Nurture The<br>environment</h2>
                                    <p class="section-desc">Lorem Ipsum is simply dummy text of free available market typesetting industry has been the industry's standard dummy</p>
                                    <div class="about-history-box wow fadeInLeft ">
                                        <div class="icon-about">
                                            <span class="tf-icon-about icon-admin-sys"></span>
                                            <div class="about-count-year section-heading-jost-size20 fw-600">25 YEARS</div>
                                        </div>
                                        <p class="section-desc about-box-right">Lorem Ipsum is simply dummy text of free available market type setting industry</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="themesflat-spacer clearfix" data-desktop="121" data-mobile="100" data-smobile="80"></div>
                                <div class="about-content-right wow fadeInRight">
                                    <div class="about-right-list link-style3">
                                        <div class="features-box">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Ligula molestie</h3>
                                                <p class="section-desc white">Dolor sit amet onsectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                            </div>
                                        </div>
                                        <div class="features-box box-2">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Magna vivamus</h3>
                                                <p class="section-desc white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                            </div>
                                        </div>
                                        <div class="features-box box-2">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Efficitur velit </h3>    
                                                <p class="section-desc white">Consectetur adipisicing elised do eiusmod tempor incididunt ut labore</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about home2 -->

        <!-- Work process -->
        <section class="flat-work-process">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="90" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle wow fadeInUp">WORK PROCESS</h4>
                            <h2 class="section-title wow fadeInUp">We Complete Every<br> Step Carefully</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="65" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-farming"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon" >01</span>
                                </div>
                            </div>
                            <div class="content-features">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Set Design Target
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-seed"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon" >03</span>
                                </div>
                            </div>
                            <div class="content-features cf-3">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Genaret Uniq Idea
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon">
                                <span class="tf-icon-wp2 icon-seeding1"></span>
                                <div class="icon-box2 link-style3">
                                    <span class="section-heading-jost-size20 icon" >02</span>
                                </div>
                            </div>
                            <div class="content-features cf-2">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Friendly Service
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon2">
                                <span class="tf-icon-wp4 icon-greenhouse1"></span>
                                <div class="icon-box3 link-style3">
                                    <span class="section-heading-jost-size20 icon" >04</span>
                                </div>
                            </div>
                            <div class="content-features cf-4">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Finished Work
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Work process -->

        <!-- counter-->
        <section class="flat-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-9">
                        <div class="counter-content-left wow fadeInLeft">
                            <img class="background-counter" src="images/Counter/the-man-working-tree.jpg" alt="images">
                            <div class="content-left-box">
                                <h2 class="title-main">We are nice people with a lot of experience.</h2>
                                <p class="section-desc">Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph</p>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-content-right themesflat-counter wow fadeInRight">
                            <div class="content-right-box mg-bottom30">
                                <span class="title-main white number" data-speed="1000" data-to="10" data-inviewport="yes">10</span><span class="title-main white">+</span>
                                <h3 class="section-heading-jost-size20 fw-600">Years of experience</h3>
                            </div>
                            <div class="content-right-box box-2 mg-bottom30">
                                <span class="title-main white number" data-speed="1500" data-to="95" data-inviewport="yes">95</span><span class="title-main white">K</span>
                                <h3 class="section-heading-jost-size20 fw-600">Happy Customers</h3>
                            </div>
                            <div class="content-right-box box-3">
                                <span class="title-main white number" data-speed="2000" data-to="100" data-inviewport="yes">100</span><span class="title-main white">%</span>
                                <h3 class="section-heading-jost-size20 mg-top-5 fw-600">Satisfaction</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /conter -->

        <!-- flat-testimonials-home2 -->
        <section class="flat-testimonials-home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="0" data-smobile="0"></div>
                        <div class="testimonials-content-left">
                            <div class="section-title-box">
                                <h5 class="section-subtitle">CLIENT TESTIMONIALS</h5>
                                <h2 class="section-title">What our clients say</h2>
                            </div>
                            <p class="section-desc mg-top-25">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="testimonials-content-right wow fadeInRight">
                            <img src="images/testimonials/young-beautiful-florist-watering-flowers.jpg" alt="images">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="owl-carousel-2 owl-theme author-carousel wow fadeInUp">
                                <div class="item">
                                    <div class="testimonials-author-box bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="images/team/staff-box1.jpg" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Eugene Freeman</h4>
                                                <h5 class="section-desc"> Tincidunt </h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box box-2 bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="images/team/staff-box2.jpg" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Kelly Coleman</h4>
                                                <h5 class="section-desc"> Nulla nec</h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="images/team/staff-box1.jpg" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Eugene Freeman</h4>
                                                <h5 class="section-desc"> Tincidunt </h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box box-2 bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="images/team/staff-box2.jpg" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Kelly Coleman</h4>
                                                <h5 class="section-desc"> Nulla nec</h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="119" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- flat-testimonials-home2 -->

        @include('landing.template.footer')
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
                            <p class="top-location">Gajayana Stadium 3rd Floor (Jl. Tangkuban Perahu, Kauman), Malang</p>
                        </div>
                    </div>
                    <div class="col md-8">
                        <div class="top-bar-right link-style3">
                            <a href="#" class="top-mail">bumibaik.com</a>
                            <ul class="widgets-nav-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
                                        <img src="icon/logo-dark.png" alt="images" />
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
                                        <li>
                                            <a href="{{ url('/') }}" title="">Home</a>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class="current-menu-item menu-item-has-children">
                                            <a href="about.html" title="">About</a>
                                            <ul class="sub-menu">
                                                <li class="current-item"><a href="about.html" title="">About Us</a></li>
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
                                        <li>
                                            <a href="contact.html" title="">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="site-header-right">
                                <div class="header-inner">
                                    <div class="search flat-show-search">
                                        <div class="show-search">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                        <div class="top-search widgets-input">
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
                                    </div>
                                    <div class="cart">
                                        <a href="#" class="cart-btn"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                    <div class="button">
                                        <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app&hl=id" class="btn">Download</a>
                                    </div>
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
        <!-- /header -->

        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="page-title-heading">
                                About Us
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner">About Us</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- about -->
        <section class="flat-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="117" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-post center bd-radius-50-image">
                            <img class="main-post-about" src="images/home/the-girl-in-the-glasses.jpg" alt="images">
                            <img class="circel-inside" src="{{asset ('landing/images/home/bumibaik.jpg')}}" alt="images">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="about-content-title wow fadeInUp">
                                <div class="section-subtitle">ABOUT US</div>
                                <div class="section-title">The Best Choice For your Business.</div>
                                <div class="section-desc">Lorem Ipsum is simply dummy text of free available market typesetting industry has been the industry's standard dummy text ever. Lorem Ipsum is simply dummy text of free available </div>
                            </div>
                            <div id="about-box" class="about-desc-box">
                                <div class="about-desc">
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-660"></span>
                                        <div class="inner-box">
                                            <a href="#">
                                                <h3 class="section-heading-jost-size20 item-1">
                                                    Best Ui Designer</h3>
                                            </a>
                                            <p class="section-desc">Lorem Ipsum is simply</p>
                                        </div>
                                    </div>
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-661"></span>
                                        <div class="inner-box">
                                            <a href="#">
                                                <h3 class="section-heading-jost-size20 item-2">
                                                    Counter In Work.</h3>
                                            </a>
                                            <p class="section-desc">
                                                Lorem Ipsum is simply</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-desc">
                                    <img class="image" src="images/home/box-flowers-green-garden.jpg" alt="images">
                                </div>
                            </div>
                            <div class="button hover-up">
                                <a href="contact.html" class="btn2">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="134" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about -->

        <!-- about home2 -->
        <section class="flat-about-home2">
            <div class="container-fluid">
                <div class="row">
                    <div class="image-about-home2">
                        <img src="images/home/close-up-planting-flowers-pot.jpg" alt="images">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="themesflat-spacer clearfix" data-desktop="148" data-mobile="60" data-smobile="60"></div>
                                <div class="about-content-left themesflat-counter">
                                    <h5 class="section-subtitle">ABOUT US</h5>
                                    <h2 class="section-title">Nurture The<br>environment</h2>
                                    <p class="section-desc">Lorem Ipsum is simply dummy text of free available market typesetting industry has been the industry's standard dummy</p>
                                    <div class="about-history-box wow fadeInLeft ">
                                        <div class="icon-about">
                                            <span class="tf-icon-about icon-admin-sys"></span>
                                            <div class="about-count-year section-heading-jost-size20 fw-600">25 YEARS</div>
                                        </div>
                                        <p class="section-desc about-box-right">Lorem Ipsum is simply dummy text of free available market type setting industry</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="themesflat-spacer clearfix" data-desktop="121" data-mobile="100" data-smobile="80"></div>
                                <div class="about-content-right wow fadeInRight">
                                    <div class="about-right-list link-style3">
                                        <div class="features-box">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Ligula molestie</h3>
                                                <p class="section-desc white">Dolor sit amet onsectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                            </div>
                                        </div>
                                        <div class="features-box box-2">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Magna vivamus</h3>
                                                <p class="section-desc white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                            </div>
                                        </div>
                                        <div class="features-box box-2">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Efficitur velit </h3>
                                                <p class="section-desc white">Consectetur adipisicing elised do eiusmod tempor incididunt ut labore</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about home2 -->

        <!-- Work process -->
        <section class="flat-work-process">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="90" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle wow fadeInUp">WORK PROCESS</h4>
                            <h2 class="section-title wow fadeInUp">We Complete Every<br> Step Carefully</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="65" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-farming"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon" >01</span>
                                </div>
                            </div>
                            <div class="content-features">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Set Design Target
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-seed"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon" >03</span>
                                </div>
                            </div>
                            <div class="content-features cf-3">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Genaret Uniq Idea
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon">
                                <span class="tf-icon-wp2 icon-seeding1"></span>
                                <div class="icon-box2 link-style3">
                                    <span class="section-heading-jost-size20 icon" >02</span>
                                </div>
                            </div>
                            <div class="content-features cf-2">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Friendly Service
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon2">
                                <span class="tf-icon-wp4 icon-greenhouse1"></span>
                                <div class="icon-box3 link-style3">
                                    <span class="section-heading-jost-size20 icon" >04</span>
                                </div>
                            </div>
                            <div class="content-features cf-4">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Finished Work
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Work process -->

        <!-- counter-->
        <section class="flat-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-9">
                        <div class="counter-content-left wow fadeInLeft">
                            <img class="background-counter" src="images/Counter/the-man-working-tree.jpg" alt="images">
                            <div class="content-left-box">
                                <h2 class="title-main">We are nice people with a lot of experience.</h2>
                                <p class="section-desc">Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph</p>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-content-right themesflat-counter wow fadeInRight">
                            <div class="content-right-box mg-bottom30">
                                <span class="title-main white number" data-speed="1000" data-to="10" data-inviewport="yes">10</span><span class="title-main white">+</span>
                                <h3 class="section-heading-jost-size20 fw-600">Years of experience</h3>
                            </div>
                            <div class="content-right-box box-2 mg-bottom30">
                                <span class="title-main white number" data-speed="1500" data-to="95" data-inviewport="yes">95</span><span class="title-main white">K</span>
                                <h3 class="section-heading-jost-size20 fw-600">Happy Customers</h3>
                            </div>
                            <div class="content-right-box box-3">
                                <span class="title-main white number" data-speed="2000" data-to="100" data-inviewport="yes">100</span><span class="title-main white">%</span>
                                <h3 class="section-heading-jost-size20 mg-top-5 fw-600">Satisfaction</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /conter -->

        <!-- flat-testimonials-home2 -->
        <section class="flat-testimonials-home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="0" data-smobile="0"></div>
                        <div class="testimonials-content-left">
                            <div class="section-title-box">
                                <h5 class="section-subtitle">CLIENT TESTIMONIALS</h5>
                                <h2 class="section-title">What our clients say</h2>
                            </div>
                            <p class="section-desc mg-top-25">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="testimonials-content-right wow fadeInRight">
                            <img src="images/testimonials/young-beautiful-florist-watering-flowers.jpg" alt="images">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="owl-carousel-2 owl-theme author-carousel wow fadeInUp">
                                <div class="item">
                                    <div class="testimonials-author-box bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="images/team/staff-box1.jpg" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Eugene Freeman</h4>
                                                <h5 class="section-desc"> Tincidunt </h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box box-2 bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="images/team/staff-box2.jpg" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Kelly Coleman</h4>
                                                <h5 class="section-desc"> Nulla nec</h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="images/team/staff-box1.jpg" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Eugene Freeman</h4>
                                                <h5 class="section-desc"> Tincidunt </h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box box-2 bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="images/team/staff-box2.jpg" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Kelly Coleman</h4>
                                                <h5 class="section-desc"> Nulla nec</h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="119" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- flat-testimonials-home2 -->

        @include('landing.template.footer')
