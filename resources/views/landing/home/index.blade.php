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
                                            <span class="top-mail">semakinbaikbumi@gmail.com</span>
                                        </div>
                                        <div class="top-bar-right">
                                            <ul class="widgets-nav-social">
                                            <li><a href="https://wa.me/6282130075758" target="_blank" ><i class="fa fa-whatsapp"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="https://www.instagram.com/bumi.baik/" target="_blank"><i class="fa fa-instagram"
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
                                                            <a href="{{ url('/') }}" title="">Home</a>
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
                                                            <a href="#" title="">Services</a>

                                                            <!-- /.sub-menu -->
                                                        </li>

                                                        <!-- <li>
                                                            <a href="{{ url('/artikel') }}" title="">Blog</a>
                                                            /.sub-menu
                                                        </li> -->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- page title -->
    <div class="page-title-home1">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title" >
                    <!-- /.page-title -->
                    <div class="flat-slider clearfix">
                        <div class="rev_slider_wrapper fullwidthbanner-container">
                            <div id="rev-slider2" class="rev_slider fullwidthabanner">
                                <ul>
                                    <!-- Slide 1 -->
                                    <li data-transition="random">
                                        <!-- Main Image -->
                                        <!-- Layers -->
                                        <div class="tp-caption tp-resizeme text-one"
                                            data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['-274','-50','-50','-50']"
                                            data-fontsize="['16','16','16','16']" data-lineheight="['20','0','0','0']"
                                            data-width="full" data-height="none" data-whitespace="normal"
                                            data-transform_idle="o:1;"
                                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                            data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                            data-start="700" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on">
                                            <!-- <h3 class="sub-title">MARKETS & RESOURCES</h3> -->
                                        </div>

                                        <div class="tp-caption tp-resizeme text-two"
                                            data-x="['left','left','left','center']"
                                            data-hoffset="['-2','-2','5','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['-130','-165', '-15','-15']"
                                            data-fontsize="['60','70','50','60']"
                                            data-lineheight="['70','80','64','48']" data-width="full"
                                            data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                            data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                            data-start="700" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on">
                                            <div class="title-box">
                                                <h2 class="title-slider text-pri2-color">Zero emission<br>
                                                    day bersama<br>BumiBaik</h2>
                                            </div>
                                        </div>

                                        <div class="tp-caption btn-text btn-linear hv-linear-gradient"
                                            data-x="['left','left','left','center']"
                                            data-hoffset="['-3','-3','5','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['48','40','180','280']" data-width="full"
                                            data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                            data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                            data-start="700" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on">
                                            <div class="button-box">
                                                <div class="button res-btn-slider">
                                                    <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank" class="btn btn-left">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-caption tp-resizeme image-slider text-right "
                                            data-x="['right','right','right','right']"
                                            data-hoffset="['-29','-29','-150','-29']"
                                            data-y="['center','center','center','center']"
                                            data-voffset="['-88','-88','60','-88']" data-width="full"
                                            data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                            data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                            data-start="800" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on">
                                            <img class="img-slide wow jackInTheBox" data-wow-delay="2500ms" data-wow-duration="2s"
                                                width="full" src="{{ asset('landing/images/home/woman1.png') }}"
                                                alt="images">
                                        </div>
                                    </li>
                                    <!-- /End Slide 1 -->
                                    <!-- Slide 1 -->
                                    <li data-transition="random">
                                        <!-- Main Image -->
                                        <!-- Layers -->
                                        <div class="tp-caption tp-resizeme text-one"
                                            data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['-274','-50','-50','-50']"
                                            data-fontsize="['16','0','0','0']" data-lineheight="['20','0','0','0']"
                                            data-width="full" data-height="none" data-whitespace="normal"
                                            data-transform_idle="o:1;"
                                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                            data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                            data-start="700" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on">
                                            <!-- <h3 class="sub-title">MARKETS & RESOURCES</h3> -->
                                        </div>

                                        <div class="tp-caption tp-resizeme text-two"
                                            data-x="['left','left','left','center']"
                                            data-hoffset="['-2','-2','5','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['-130','-165',10','-15']"
                                            data-fontsize="['60','70','50','60']"
                                            data-lineheight="['70','80','64','48']" data-width="full"
                                            data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                            data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                            data-start="700" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on">
                                            <div class="title-box">
                                                <h2 class="title-slider text-pri2-color">Kurangi Emisi
                                                    <br> Karbon Bersama <br> BumiBaik
                                                </h2>
                                            </div>
                                        </div>

                                        <div class="tp-caption btn-text btn-linear hv-linear-gradient"
                                            data-x="['left','left','left','center']"
                                            data-hoffset="['-3','-3','5','0']"
                                            data-y="['middle','middle','middle','middle']"
                                            data-voffset="['48','40','180','300']" data-width="full"
                                            data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                            data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                            data-start="700" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on">
                                            <div class="button-box">
                                                <div class="button res-btn-slider">
                                                    <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank" class="btn btn-left">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-caption tp-resizeme image-slider text-right "
                                            data-x="['right','right','right','right']"
                                            data-hoffset="['-29','-29','-150','-29']"
                                            data-y="['center','center','center','center']"
                                            data-voffset="['-88','-88','60','-88']" data-width="full"
                                            data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                            data-transform_in="y:0;z:[100%];rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                            data-mask_in="x:[100%];y:0px;" data-mask_out="x:inherit;y:inherit;"
                                            data-start="900" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on">
                                            <img class="img-slide wow jackInTheBox" data-wow-delay="2500ms"
                                                data-wow-duration="2s"
                                                src="{{ asset('landing/images/home/woman2.png') }}" alt="images">
                                        </div>
                                    </li>
                                    <!-- /End Slide 1 -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- flat-slider -->
                </div>

            </div>

        </div>
    </div>
    <!-- /.page-title -->

    <!-- features -->
    <br>
    <div class="section-title-box">
        <h4 class="section-subtitle">TREE FOR LIFE</h4>
        <h2 class="section-title">Pohon Termonitor<br></h2>
    </div>
    <br><br>
    <section class="flat-features">
        <div class="container-fluid">
            <div class="row">
                <div class="item-three-column">
                    <div class="inner-features hover-up wow fadeInUp">
                        <div class="features-box">
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h2 class="section-title text-center">
                                        18.174
                                    </h2>
                                </a>
                                <p class="section-desc text-center">
                                    Pohon termonitor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-three-column">
                    <div class="inner-features hover-up wow fadeInUp">
                        <div class="features-box">
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h2 class="section-title text-center">
                                        15
                                    </h2>
                                </a>
                                <p class="section-desc text-center">
                                    Mitra Perusahaan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-three-column">
                    <div class="inner-features hover-up wow fadeInUp">
                        <div class="features-box">
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h2 class="section-title text-center">
                                        5
                                    </h2>
                                </a>
                                <p class="section-desc text-center">
                                    Program Alam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <!-- /features -->

    <!-- about -->
    <section class="flat-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="121" data-mobile="60" data-smobile="60">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-post center bd-radius-50-image">
                        <img class="img-fluid" src="{{ asset('landing/images/home/bumibaik.jpg') }} " alt="images">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="about-content-title wow fadeInUp">
                            <div class="section-subtitle">ABOUT US</div>
                            <div class="section-title">Kurangi Emisi Karbon Bersama BumiBaik</div>
                            <div class="section-desc">BumiBaik membantu setiap orang menghitung emisi karbon, menanam,
                                dan mengadopsi pohon secara sukarela untuk menyerap emisi karbon sehingga karbon yang
                                dihasilkan dan karbon yang diserap oleh pohon (Carbon Neutral) menjadi seimbang.
                                BumiBaik memberikan informasi dan edukasi tentang dampak emisi karbon terhadap
                                lingkungan dan isu perubahan iklim </div>
                        </div>
                        <!-- <div id="about-box" class="about-desc-box">
                            <div class="about-desc">
                                <div class="about-box-nd1 wow fadeInLeft">
                                    <span class="tf-icon icon-Group-660"></span>
                                    <div class="inner-box">
                                        <a href="services.html">
                                            <h3 class="section-heading-jost-size20 item-1">
                                                Best Ui Designer</h3>
                                        </a>
                                        <p class="section-desc">Lorem Ipsum is simply</p>
                                    </div>
                                </div>
                                <div class="about-box-nd1 wow fadeInLeft">
                                    <span class="tf-icon icon-Group-661"></span>
                                    <div class="inner-box">
                                        <a href="services.html">
                                            <h3 class="section-heading-jost-size20 item-2">
                                                Counter In Work.</h3>
                                        </a>
                                        <p class="section-desc">
                                            Lorem Ipsum is simply</p>
                                    </div>
                                </div>
                            </div>
                            <div class="image-desc">
                                <img class="image"
                                    src="{{ asset('landing/images/home/box-flowers-green-garden.jpg') }}"
                                    alt="images">
                            </div>
                        </div>
                        <div class="button hover-up">
                            <a href="contact.html" class="btn2">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- /about -->

    <!-- Our services -->
    <section class="flat-services" style="background-image: url('../landing/images/home/daun2.jpg') !important">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-box">
                        <div class="inner-header">
                        <h2 class="section-title">Program Kami</h2>
                        <br>
                        <h4 class="section-subtitle">Memfasilitasi pengurangan emisi karbon dan
                            penanaman pohon untuk Bumi semakin baik</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="67" data-mobile="60" data-smobile="60">
                    </div>
                </div>

                <div class="item-four-column">
                    <div class="our-services-box hover-up-style2 mg-bottom30 wow fadeInDown">
                        <div class="our-services-overlay"></div>
                        <span class="tf-icon icon-size icon-icon-farming-layer"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span></span>
                        <div class="content-features">
                            <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank">
                                <h3 class="section-heading-jost-size22">
                                    Perhitungan Karbon</h3>
                            </a>
                            <p class="section-desc">
                                Hitung jejak dan pemakaian karbonmu dengan BumiBaik
                            </p>
                            <div class="link2 link-style2">
                                <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank" class="read-more">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-four-column">
                    <div class="our-services-box hover-up-style2 mg-bottom30 wow fadeInDown">
                        <div class="our-services-overlay"></div>
                        <span class="tf-icon icon-size icon-icon-farming-layer"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span></span>
                        <div class="content-features">
                            <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank">
                                <h3 class="section-heading-jost-size22">
                                    Monitoring Pohon</h3>
                            </a>
                            <p class="section-desc">
                                Pantau pohon yang kamu tanam dengan BumiBaik
                            </p>
                            <div class="link2 link-style2">
                                <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank" class="read-more">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-four-column">
                    <div class="our-services-box hover-up-style2 mg-bottom30 wow fadeInDown">
                        <div class="our-services-overlay"></div>
                        <span class="tf-icon icon-size icon-icon-farming-layer"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span></span>
                        <div class="content-features">
                            <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank">
                                <h3 class="section-heading-jost-size22">
                                    Kolaborasi Penyelesaian Isu</h3>
                            </a>
                            <p class="section-desc">
                                Bersama menyelesaikan isu perubahan iklim dengan BumiBaik
                            </p>
                            <div class="link2 link-style2">
                                <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank" class="read-more">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-four-column">
                    <div class="our-services-box hover-up-style2 wow fadeInLeft">
                        <div class="our-services-overlay"></div>
                        <span class="tf-icon icon-size2 icon-Group-7526"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span></span>
                        <div class="content-features">
                            <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank">
                                <h3 class="section-heading-jost-size22">
                                    Adopt Tree</h3>
                            </a>
                            <p class="section-desc">
                                Adopsi pohon untuk kurangi emisi karbon bersama BumiBaik
                            </p>
                            <div class="link2 link-style2">
                                <a href="https://play.google.com/store/apps/details?id=com.bumibaik.bumibaik_app" target="_blank" class="read-more">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Our service -->
    <!-- Our services -->
    <section class="flat-services" style="background: #fff !important">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-box">
                        <h2 class="section-title">Mitra Kami</h2>
                        <br>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="67" data-mobile="60" data-smobile="60">
                    </div>
                </div>
                <div class="row mb-3" style="margin-bottom: 10px;">
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT Cargill.png') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. AIR BERSIH JATIM (PERSERODA).jpeg') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. BELIRANG KALISARI.jpeg') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. CS2 POLA SEHAT.png') }}" width="150px" alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. DAEWOONG INFION.png') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. GALIC BINA MADA.jpg') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. HM SAMPOERNA Tbk.jpeg') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. INDONESIA POWER - GRATI POMU.jpg') }}" width="150px" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. INFION.jpg') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. KARYA SUTARINDO.png') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. MyEco Teknologi Nusantara.png') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-3">
                        <img src="{{ asset('landing/images/perusahaan/PT. PANVERTA CAKRAKENCANA.png') }}" width="150px" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4">
                        <img src="{{ asset('landing/images/perusahaan/PT. TIRTAMAS LESTARI.jpg') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-4">
                        <img src="{{ asset('landing/images/perusahaan/PT. ULTRA PRIMA ABADI.png') }}" width="150px" alt="">
                    </div>
                    <div class="col col-md-4">
                        <img src="{{ asset('landing/images/perusahaan/puskom_bei-20201120_111307.png') }}" width="150px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!-- / Our service -->

<section class="flat-case-study">
    <div class="section-title-box">
        <div class="section-subtitle">BumiBaik Activity</div>
            <div class="section-title">Dokumentasi Aktivitas BumiBaik</div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-box-profolio wow fadeInDown">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="{{ asset('landing/images/activity/Meet.jpg') }}" alt="images">
                                <div class="profolio-show active">
                                    <!-- <div class="profolio-info">
                                        <div class="info"> -->
                                            <!-- <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                            <p class="desc-box">Dummy text of free available</p> -->
                                        <!-- </div> -->
                                        <!-- <div class="button-next">
                                            <a class="profolio-btn" href="case-details.html"></a>
                                        </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-box-profolio wow fadeInDown">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="{{ asset('landing/images/activity/Myeco.JPG') }}" alt="images">
                                <div class="profolio-show active">
                                    <!-- <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                            <p class="desc-box">Dummy text of free available</p>
                                        </div>
                                        <div class="button-next">
                                            <a class="profolio-btn" href="case-details.html"></a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>
                    </div>
                    </section>
                    <!-- <div class="col-md-6">
                        <div class="list-box-profolio wow fadeInUp">
                            <div class="image-profolio">
                                <img src="images/case-study/plant-tree.jpg" alt="images">
                                <div class="profolio-show">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                            <p class="desc-box">Dummy text of free available</p>
                                        </div>
                                        <div class="button-next">
                                            <a class="profolio-btn" href="case-details.html"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-box-profolio wow fadeInUp">
                            <div class="image-profolio">
                                <img src="images/case-study/plant-tree2.jpg" alt="images">
                                <div class="profolio-show">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                            <p class="desc-box">Dummy text of free available</p>
                                        </div>
                                        <div class="button-next">
                                            <a class="profolio-btn" href="case-details.html"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30"></div>
                    </div> -->
    <!-- Our team -->

    <!-- /Contact -->

    <!-- blog -->
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
                            <div class="item wow fadeInUp">
                                <div class="blog-item hover-up-style2">
                                    <div class="item-overlay"></div>
                                    <div class="item-box link">
                                        <!-- <div class="content-info"><a href="blog.html" class="folder">
                                                Home Gardening
                                            </a></div> -->
                                        <div class="link-style6">
                                            <div class="content-info margin-top"><a href="blog-detail.html"
                                                    class="user">
                                                    By Admin
                                                </a></div>
                                            <a href="blog-detail.html" class="section-heading-jost-size20">
                                                Mauris neque nisiibus non elementum
                                            </a>
                                        </div>
                                        <hr class="line-blog-item">
                                        <h4 class="sub-title">
                                            28 JANUARY, 2020
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeInUp">
                                <div class="blog-item background2 hover-up-style2">
                                    <div class="item-overlay"></div>
                                    <div class="item-box box-2">

                                        <div class="link-style6">
                                            <div class="content-info margin-top"><a href="blog-detail.html"
                                                    class="user">
                                                    By Admin
                                                </a></div>
                                            <a href="blog-detail.html" class="section-heading-jost-size20">
                                               Aksi nyata MyEco dan BumiBaik

                                            </a>
                                        </div>
                                        <hr class="line-blog-item">
                                        <h4 class="sub-title">
                                            28 JANUARY, 2020
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeInUp">
                                <div class="blog-item background3 hover-up-style2">
                                    <div class="item-overlay"></div>
                                    <div class="item-box box-3">
                                        <!-- <div class="content-info"><a href="blog.html" class="folder folder-3">
                                                Gardening Ideas
                                            </a></div> -->
                                        <div class="link-style6">
                                            <div class="content-info margin-top"><a href="blog-detail.html"
                                                    class="user">
                                                    By Admin
                                                </a></div>
                                            <a href="{{ url('/artikel') }}" class="section-heading-jost-size20">
                                                Program Cempaka Fondation di Kab. Pasuruan
                                            </a>
                                        </div>
                                        <hr class="line-blog-item">
                                        <h4 class="sub-title">
                                            28 JANUARY, 2020
                                        </h4>
                                    </div>
                                </div>
                            </div>
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
