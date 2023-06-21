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
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('/') }}" title="">Home</a>
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
                                        {{-- <li class="current-menu-item menu-item-has-children">
                                            <a href="blog.html" title="">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="current-item"><a href="blog.html" title="">Blog Standard</a></li>
                                                <li><a href="blog-detail.html" title="">Blog Detail</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="contact.html" title="">Contact</a>
                                        </li> --}}
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
                                        <a href="contact.html" class="btn">Get A Quote</a>
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
                                Blog Standard
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="{{ url('/') }}">Home</a></span><span class="page-title-content-inner">Blog Standard</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- main content -->

        <section class="flat-blog-home01">
            <div class="container">
                <div class="row">
                    <div class="section-title-box">
                        <h4 class="section-subtitle  wow fadeInUp">LATEST NEWS</h4>
                        <h2 class="section-title  wow fadeInUp">Our Insights & Articles</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="slide-blog-content">
                            <div class="owl-carousel owl-theme">
                                @foreach ($news as $news)
                                <div class="item wow fadeInUp">
                                    <div class="blog-item hover-up-style2">
                                        <div class="item-overlay"></div>
                                        <div class="item-box link">
                                            <div class="link-style6">
                                                <div class="img-wrapper" style="height:150px;width:100%;">
                                                  <img src="{{ Storage::url($news->image) }}" alt="" style="height:500px;width:500px;">
                                                </div>

                                                <div class="content-info" style="margin-top:50px;">
                                                    <a href="{{route('detail.news', $news->id)}}" class="user">
                                                        {{ $news->author }}

                                                    </a>
                                                </div>
                                                <a href="{{route('detail.news', $news->id)}}" class="section-heading-jost-size20">

                                                    {{ Str::limit($news->title, 25) }}
                                                </a>
                                            </div>
                                            <hr class="" style="width: 100%;">
                                            <h4 class="sub-title">
                                                {{ $news->created_at->format('d/m/y') }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /blog -->


@include('landing.template.footer')
