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
                                            <a href="about.html" title="">About</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('/about') }}" title="">About
                                                        Us</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="#" title="">Services</a>

                                            <!-- /.sub-menu -->
                                        </li>

                                        <li>
                                            <a href="{{ route('get.blog') }}" title="">Blog</a>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="#" title="">Contact</a>
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
                        <div class="row">
                            @foreach ($news as $card)

                            <div class="col-md-4 item wow fadeInUp">
                                <div class="blog-item hover-up-style2">
                                    <img src="{{ Storage::url($card->image) }}" alt="" style="height:100%;width:100%; object-fit:cover">
                                    <div class="item-overlay">

                                    </div>

                                    <div class="item-box link">
                                        <!-- <div class="content-info"><a href="blog.html" class="folder">
                                            Home Gardening
                                        </a></div> -->
                                        <div class="link-style6">
                                            {{-- <div class="img-wrapper" style="height:150px;width:100%;">
                                            </div> --}}
                                            <div class="content-info" style="margin-top:-175px;">
                                                <a href="{{route('detail.news', $card->id)}}" class="user">
                                                    {{ $card->author }}

                                                </a>
                                            </div>
                                            <a href="{{route('detail.news', $card->id)}}" class="section-heading-jost-size20">
                                                {{-- {{ $card->title }} --}}
                                                {{ Str::limit($card->title, 25) }}
                                            </a>
                                        </div>
                                        <hr class="" style="width: 100%;">
                                        <h4 class="sub-title">
                                            <div style="color: #fff">
                                                {{ $card->created_at->format('d/m/y') }}
                                        </div>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
