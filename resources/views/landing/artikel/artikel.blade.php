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
                                                            <a href="{{ url('') }}" title="">Home</a>
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
                                                            <a href="{{ url('') }}" title="">Services</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ url('') }}" title="">Services</a>
                                                                </li>
                                                                <li><a href="{{ url('') }}"
                                                                        title="">Service Details</a></li>
                                                            </ul>
                                                            <!-- /.sub-menu -->
                                                        </li>

                                                        <li class="menu-item-has-children">
                                                            <a href="{{ route('get.blog') }}" title="">Blog</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ url('') }}" title="">Blog Standard</a>
                                                                </li>
                                                                <li><a href="{{ url('') }}" title="">Blog
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
                            <div class="page-title-heading">
                                Blog Details
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner">Blog Details</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- main content -->
        <section class="flat-blog-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="166" data-mobile="0" data-smobile="0"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="post-wrap">
                            <div class="content-blog-detail">
                                <div class="image-box">
                                    <div class="image" style="text-align: center">
                                        <img src={{  Storage::url($news->image)  }} alt="image">
                                    </div>
                                </div>
                                <div class="content mg-top-15">
                                    <span class="content-info"><a href="#" class="user">
                                        {{ $news->author }}
                                    </a><a href="#" class="date">
                                        {{ $news->created_at->format('d/m/y') }}
                                    </a></span>
                                        <div class="heading-content-box">
                                            <a href="blog-detail.html">
                                            {{ $news->title }}
                                    </a>
                                </div>


                                    <p class="desc-content-box text-decs">
                                        <div style="color: #525368">
                                       {!! $news->content  !!}
                                        </div>
                                    </p>





                                    <hr>


                                    <!-- comments -->
                                    <!-- input comment -->

                                </div>
                            </div>
                        </div>
                        <!-- /.post-wrap -->

                    </div>
                    <!-- /.col-md-8 -->


                    <!-- /.col-md-4 -->
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="193" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.main-content -->

        @include('landing.template.footer')
