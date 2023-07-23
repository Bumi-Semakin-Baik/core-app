@include('landing.template.header')

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
                                            <a href="{{ url('/services') }}" title="">Services</a>

                                            <!-- /.sub-menu -->
                                        </li>

                                        <li>
                                            <a href="{{ route('get.blog') }}" title="">Blog</a>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="{{ url('/contact') }}" title="">Contact</a>
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

    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title2">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            Donate Payment
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
                    <h1 class="section-heading-jost-size28 text-pri2-color">"{{$donations->title}}"</h1>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="widget-contact-services-details mg-bottom-25">
                                <div class="sidebar-title mg-bottom-25">
                                    <h2 class="section-heading-jost-size28 text-pri2-color">Pembayaran</h2>
                                </div>
                                <div class="">
                                    <h3 style="color: #0F4229;" class="section-heading-jost-size20 item-1">Nominal
                                        Donasi (Rp.)<span style="color: red;">*</span></h3>
                                </div>
                                <div class="input-group mb-3">
                                    <!-- <div class="input-group-prepend">
                                        <span class="input-group-text text-success" id="basic-addon1">Rp</span>
                                    </div> -->
                                    <input type="number" class="form-control" placeholder="Masukkan nominal donasi" aria-label="Nominal Donasi" aria-describedby="basic-addon1" name="nominal_donasi" required step="1000">
                                </div>
                                <br>
                                <!-- <div class="sidebar-title mg-bottom-25">
                                    <h2 class="section-heading-jost-size28 text-pri2-color">Metode Pembayaran</h2>
                             </div> -->

                             <div class="sidebar-title mg-bottom-25">
                             <h3 style="color: #0F4229;" class="section-heading-jost-size20 item-1">Data Diri <span style="color: red;">*</span></h3>
                             <form>
                                    <div class="form-group">
                                        <label for="name" class="text-success">Nama</label>
                                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="text-success">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
                                        <!--     -->
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-10">
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
                    </div> -->

                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30">
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <div class="col-md-10"> -->
                        <div class="widget-contact-services-details">
                            <div class="sidebar-title">
                                <h2 class="section-heading-jost-size28 text-pri2-color" style="margin-bottom: 2rem;">
                                    Total Pembayaran</h2>
                                <div class="text-center" style="color: #235;font-size: 25px;" class="text-center">
                                    <strong>Rp. {{ number_format("$donations->target",2,',','.')}}</strong></div>
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
