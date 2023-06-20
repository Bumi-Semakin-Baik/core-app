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

        <section class="flat-blog-standard">

            @foreach ($news as $news)

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="0" data-smobile="0"></div>
                    </div>
                    <div class="item wow fadeInUp">
                <div class="blog-item hover-up-style2">
                    <div class="item-overlay"></div>

                    <div class="item-box link">
                        <!-- <div class="content-info"><a href="blog.html" class="folder">
                            Home Gardening
                        </a></div> -->
                        <div class="link-style6">
                            {{-- <img src="{{ Storage::url($news->image) }}" style="object-fit:contain;" alt=""> --}}
                            <div class="content-info margin-top">
                                <a href="{{route('detail.news', $news->id)}}" class="user">
                                    {{ $news->author }}
                                </a>
                            </div>
                            <a href="{{route('detail.news', $news->id)}}" class="section-heading-jost-size20">
                                {{ $news->title }}
                            </a>
                        </div>
                        <hr class="line-blog-item">
                        <h4 class="sub-title">
                            {{ $news->created_at->format('d/m/y') }}
                        </h4>
                    </div>
                </div>
            </div>
                    <div class="col-md-8">
                        <div class="post-wrap">
                            <article class="article-1">
                                <div class="image-box">
                                    <div class="image">
                                        <img src="{{ Storage::url($news->image) }}" alt="image">
                                    </div>
                                    <div class="date-image">
                                        <p>{{ $news->created_at->format('d/m/y') }}</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="post-content-inner">
                                        <ul>
                                            <li>
                                                <a href="#" class="text-decs">
													{{ $news->author }}
												</a>
                                            </li>
                                            <li>
                                                <a href="#" class="line text-decs">
													#
												</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-decs">
													0 comments
												</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-art">
                                        <a href="blog-detail.html" class="section-heading-jost-size28">
                                            {{ $news->title }}
                                        </a>
                                        <p class="desc-content-box text-decs">
                                        {{ Str::limit($news->content, 200) }}
                                        </p>
                                        <div class="link-style2">
                                            <a href="{{ route('detail.news', $news->id) }}" class="read-more">
											Read More<i class="fas fa-long-arrow-alt-right"></i>
										</a>
                                        </div>
                                    </div>

                                </div>
                            </article>
                            <!-- end art1-->
                            @endforeach
                            <div class="themesflat-pagination clearfix">
                                <ul>
                                    <li><a href="#" class="page-numbers prev"><span class="fa fa-angle-left"></span></a></li>
                                    <li><a href="#" class="page-numbers current">1</a></li>
                                    <li><a href="#" class="page-numbers">2</a></li>
                                    <li><a href="#" class="page-numbers">3</a></li>
                                    <li><a class="page-numbers">...</a></li>
                                    <li><a href="#" class="page-numbers">10</a></li>
                                    <li><a href="#" class="page-numbers next"><span class="fa fa-angle-right"></span></a></li>
                                </ul>
                            </div>
                            <!-- end pagination-->
                        </div>
                        <!-- /.post-wrap -->
                    </div>
                    <!-- /.col-md-8 -->

                    <div class="col-md-4">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                        <div class="side-bar">
                            <div class="widgets-search">
                                <h3 class="widgets-side-bar-title">
                                    Search
                                </h3>
                                <div class="widgets-input">
                                    <form method="get" role="search" class="search-form">
                                        <input type="search" class="search-field" placeholder="Search here" value="" name="s" title="Search for">
                                        <button class="search-submit" type="submit" title="Search"></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widgets-category">
                                <h3 class="widgets-side-bar-title">
                                    Category
                                </h3>
                                <ul class="list-category">
                                    <li><a href="#">Tempor lorem interdum</a></li>
                                    <li><a href="#">Auctor mattis lacus </a></li>
                                    <li><a href="#">Dolor proin </a></li>
                                    <li><a href="#">Pharetra amet </a></li>
                                    <li><a href="#">Nullam dolor gravida </a> </li>
                                </ul>
                            </div>
                            <div class="widget widget_lastest">
                                <h2 class="widgets-side-bar-title"><span>Recent News</span></h2>
                                <ul class="lastest-posts data-effect clearfix">
                                    <li class="clearfix">
                                        <div class="thumb data-effect-item has-effect-icon">
                                            <img src="images/blog/medium-shot-woman-holding-plant-pot.jpg" alt="Image">
                                        </div>
                                        <div class="text">
                                            <h3><a href="blog-detail.html" class="title-thumb">Integer at faucibus urna. Nullam condimentum</a></h3>
                                            <a href="#" class="date">15 October</a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="thumb data-effect-item has-effect-icon">
                                           <img src="images/blog/close-up-picture-hand-holding-wo.jpg" alt="Image">
                                        </div>
                                        <div class="text">
                                            <h3><a href="blog-detail.html" class="title-thumb">Nunc scelerisque tincidunt estibulum</a></h3>
                                            <a href="#" class="date">21 Jully</a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="thumb data-effect-item has-effect-icon">
                                            <img src="images/blog/planting-flowers-thumb.jpg" alt="Image">
                                        </div>
                                        <div class="text">
                                            <h3><a href="blog-detail.html" class="title-thumb">Cras eu elit congue, plac erat duicidunt nisl</a></h3>
                                            <a href="#" class="date">21 December</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.widget_lastest -->
                            <div class="widgets-contact-info">
                                <div class="contact-info-img">
                                    <img src="images/blog/young-beautiful-florist-watering-flowers.jpg" alt="image">
                                </div>
                                <div class="contact-info-box">
                                    <div class="contact-info-content">
                                        <div class="call-us">
                                            <div class="icon-call-us"></div>
                                            <div class="content-call-us">
                                                <h4 class="heading-16px-rubik">Call Us</h4>
                                                <h4 class="heading-16px-rubik">360-779-22289</h4>
                                            </div>
                                        </div>
                                        <div class="our-mail">
                                            <div class="icon-our-mail"></div>
                                            <div class="content-our-mail">
                                                <h4 class="heading-16px-rubik">Our Mail</h4>
                                                <h4 class="heading-16px-rubik">yourname@mail.com</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>    <!-- /.container -->
        </section><!-- /flat-blog -->

@include('landing.template.footer')
