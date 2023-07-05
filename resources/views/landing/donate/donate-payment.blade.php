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
                                                                <li><a href="{{ url('') }}"
                                                                        title="">Services</a>
                                                                </li>
                                                                <li><a href="{{ url('') }}" title="">Service
                                                                        Details</a></li>
                                                            </ul>
                                                            <!-- /.sub-menu -->
                                                        </li>

                                                        <li class="menu-item-has-children">
                                                            <a href="{{ url('') }}" title="">Blog</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ url('') }}" title="">Blog
                                                                        Standard</a>
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
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            Service Details
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="index.html">Home</a></span><span
                                class="page-title-content-inner">Donate</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.page-title -->

    <section class="flat-service-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="117" data-mobile="60" data-smobile="60"></div>
                </div>
                <div class="col-md-12 text-center" style="margin-bottom: 2rem;">
                    <h1 class="section-heading-jost-size28 text-pri2-color">Yuk donasi kampanye alam</h1>
                    <h1 class="section-heading-jost-size28 text-pri2-color">"The gardening that matters."</h1>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="widget-contact-services-details mg-bottom-25">
                                <div class="sidebar-title mg-bottom-25">
                                    <h2 class="section-heading-jost-size28 text-pri2-color">Pembayaran</h2>
                                </div>
                                <div class="">
                                    <h3 style="color: #0F4229;" class="section-heading-jost-size20 item-1">Nominal
                                        Donasi <span style="color: red;">*</span></h3>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan nominal donasi" aria-label="Nominal Donasi" aria-describedby="basic-addon1" name="nominal_donasi" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="widget-contact-services-details">
                                <div class="sidebar-title">
                                    <h2 class="section-heading-jost-size28 text-pri2-color"
                                        style="margin-bottom: 2rem;">Data Diri</h2>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
                                        <div class="#" style="margin-top: 2rem;margin-bottom: 2rem;"><a
                                        class="button-services" href="#">Donasi</a></div>
                            </div>
                                    </form>
                            </div>
                        </div>
                    </div>

                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div class="widget-contact-services-details">
                            <div class="sidebar-title">
                                <h2 class="section-heading-jost-size28 text-pri2-color" style="margin-bottom: 2rem;">
                                    Total Pembayaran</h2>
                                <div class="text-center" style="color: #235;font-size: 25px;" class="text-center">
                                    <strong>Rp250,000,000</strong></div>
                                <div class="text-center" style="margin-top: 2rem;margin-bottom: 2rem;"><a
                                        class="button-services" href="#">Donasi</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="172" data-mobile="100" data-smobile="60">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.template.footer')
