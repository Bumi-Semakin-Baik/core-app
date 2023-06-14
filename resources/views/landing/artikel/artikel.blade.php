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
                                                            <a href="{{ url('/') }}" title="">Home</a>
                                                        </li>
                                                        <li class="menu-item-has-children">
                                                            <a href="#" title="">About</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{ url('/about') }}" title="">About
                                                                        Us</a></li>
                                                                <li><a href="team.html" title="">Team</a></li>
                                                                <li><a href="faq.html" title="">Faq</a></li>
                                                            </ul>
                                                            <!-- /.sub-menu -->
                                                        </li>
                                                        <li class="#">
                                                            <a href="#" title="">Services</a>
                                                            <!-- <ul class="sub-menu">
                                                                <li><a href="services.html" title="">Services</a>
                                                                </li>
                                                                <li><a href="service-details.html"
                                                                        title="">Service Details</a></li>
                                                            </ul> -->
                                                            <!-- /.sub-menu -->
                                                        </li>
                                                            
                                                        <li class="#">
                                                            <a href="blog.html" title="">Blog</a>
                                                        </li>
                                                        <!-- <li class="#">
                                                            <a href="blog.html" title="">Blog</a> -->
                                                            <!-- <ul class="sub-menu">
                                                                <li><a href="blog.html" title="">Blog Standard</a>
                                                                </li>
                                                                <li><a href="blog-detail.html" title="">Blog
                                                                        Detail</a></li>
                                                            </ul> -->
                                                            <!-- /.sub-menu -->
                                                        <!-- </li> -->
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
  <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="section-title">
                                Blog Details
                            </div>
                            <div class="section-subtitle">
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
                    <div class="col-md-8">
                        <div class="post-wrap">
                            <div class="content-blog-detail">
                                <div class="image-box">
                                    <div class="image">
                                        <img src="images/blog/young-workers-greenhouse-feed-flowers-concept-caring-plants.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="content mg-top-15">
                                    <span class="content-info"><a href="#" class="user">
									{{ $news->author }}
								</a><a href="#" class="date">
									28 JANUARY, 2020
							 	</a></span>
                                    <div class="heading-content-box">
                                        <a href="blog-detail.html">
                                        Cempaka Foundation Luncurkan Program Konservasi Hutan Dan Daerah Tangkapan Air Di Lereng Gunung Penanggungan, Pasuruan

								</a></div>


                                    <p class="desc-content-box text-decs">
                                   {!! $news->content  !!}
                                    </p>

                                    <p class="desc-content-box text-decs">
                                    Pada  aktivitas konservasi ini, sebanyak 2600 bibit pohon akan ditanam di 4 daerah berbeda. Desa Wonosunyo akan ditanami 400 bibit pohon, 300 dari PT Tirtamas Lestari dan 100 dari PT Belirang Kalisari. Sedangkan di Kawasan Hutan Puthuk Elang, Desa Jatiarjo diberikan jatah 1000 bibit pohon dari PT Akasha Wira International Tbk. 1000 bibit lainnya yang diberi oleh PT CS2 Pola Sehat akan ditanam di Kawasan Hutan Lindung Blok Curah Tangkil, Desa Dayurejo. Lalu 200 bibit terakhir dari myECO Teknologi Nusantara akan ditanam di Kawasan Hutan Blok Sukmojati Desa Dayurejo.

                                    Adapun jenis pohon yang akan ditanam di desa ini adalah pohon beringin, kluwih, dan durian. Menurut Sarifudin Latif, Direktur Cempaka Foundation, alasan pemilihan pohon ini dikarenakan pohon-pohon tersebut memiliki daya serap air yang bagus sehingga bisa menjaga mata air. Selain itu buah dari pohon tersebut dapat dinikmati oleh masyarakat sekitar.  Konservasi ini akan dilakukan secara terus menerus setiap musim hujan dengan harapan sumber mata air di desa Wonosunyo tidak akan kekurangan air saat musim kemarau. Sedemikian yang dikutip dari Anshori, Sekretaris Desa Wonosunyo dan Khoirun, Kepala Bidang Tata Lingkungan Dinas Lingkungan Hidup Kabupaten Pasuruan.
                                    </p>
                                    <div class="image-box">
                                        <div class="image-2">
                                            <img src="images/blog/young-woman-working-glass-greenhouse.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="content-2 heading-content-box">
                                        <a href="blog-detail.html">
											AMC Entertainment sparks calls for scrutiny
									</a></div>


                                    <p class="desc-content-box text-decs">
                                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                                    </p>
                                    <ul class="nav-access-blog-detail">
                                        <li><a href="#" class="tick">sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</a></li>
                                        <li><a href="#" class="tick">Stet clita kasd gubergren, no sea takimata sanctus</a></li>
                                        <li><a href="#" class="tick">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</a></li>
                                    </ul>
                                    <hr>
                                    <div class="bottom-content">
                                        <div class="related-tag">
                                            <h3 class="title heading-16px-rubik">Related Tags :</h3>
                                            <ul class="list-related">
                                                <li><a href="#">Business.</a></li>
                                                <li><a href="#">Corporate.</a></li>
                                                <li><a href="#">Agency</a></li>
                                            </ul>
                                        </div>
                                        <div class="social-share">
                                            <h3 class="title2 heading-16px-rubik">Share :</h3>
                                            <ul class="widgets-nav-social">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widgets-comment">
                                        <div class="widgets-title-comment">
                                            Comments
                                        </div>
                                        <div class="widgets-comment-box">
                                            <div class="box-1">
                                                <div class="image-comment bd-radius-50-image">
                                                    <img src="images/blog/avt1.jpg" alt="image">
                                                </div>
                                                <div class="content-comment">
                                                    <div class="title">
                                                        <div class="heading"> <a href="#">Laurel Wallace</a> </div>
                                                        <div class="date-comments"><a href="#">May 18</a> </div>
                                                    </div>
                                                    <p class="desc-content-box text-decs">
                                                        Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt. Nam sem lacus, ornare non ante sed, ultricies.
                                                    </p>
                                                    <div class="reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="box-2">
                                                <div class="image-comment bd-radius-50-image">
                                                    <img src="images//blog/avt2.jpg" alt="image">
                                                </div>
                                                <div class="content-comment">
                                                    <div class="title">
                                                        <div class="heading"> <a href="#">Bobby Hawkins</a> </div>
                                                        <div class="date-comments"><a href="#">December 22</a> </div>
                                                    </div>
                                                    <p class="desc-content-box text-decs">
                                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut arcu libero, pulvinar non.
                                                    </p>
                                                    <div class="reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- comments -->
                                    <!-- input comment -->
                                    <div class="widgets-post-comment">
                                        <div class="widgets-title-comment">
                                            Leave a Reply
                                        </div>
                                        <div class="widgets-input-box">
                                            <span><input class="tf-input input-yourname" type="text" placeholder="Your Name"></span>
                                            <span><input class="tf-input input-youremail" type="email"  placeholder="Your E-mail"></span>
                                            <span><textarea class="tf-input input-yourmessage" placeholder="Enter comment here" name="message" cols="30" rows="10"></textarea></span>
                                            <div class="tf-submit-input">
                                                <a href="#" class="tf-button">Post Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <div class="elm-link">
                                                <a href="page-blog-single.html" class="icon-2"></a>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h3><a href="#" class="title-thumb">Integer at faucibus urna. Nullam condimentum</a></h3>
                                            <a href="#" class="date">15 October</a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="thumb data-effect-item has-effect-icon">
                                            <img src="images/blog/close-up-picture-hand-holding-wo.jpg" alt="Image">
                                            <div class="elm-link">
                                                <a href="page-blog-single.html" class="icon-2"></a>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h3><a href="#" class="title-thumb">Nunc scelerisque tincidunt estibulum</a></h3>
                                            <a href="#" class="date">15 October</a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="thumb data-effect-item has-effect-icon">
                                            <img src="images/blog/planting-flowers-thumb.jpg" alt="Image">
                                            <div class="elm-link">
                                                <a href="page-blog-single.html" class="icon-2"></a>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h3><a href="#" class="title-thumb">Cras eu elit congue, plac erat duicidunt nisl</a></h3>
                                            <a href="#" class="date">15 October</a>
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
                                                <div class="heading-16px-rubik">Call Us</div>
                                                <div class="heading-16px-rubik">360-779-22289</div>
                                            </div>
                                        </div>
                                        <div class="our-mail">
                                            <div class="icon-our-mail"></div>
                                            <div class="content-our-mail">
                                                <div class="heading-16px-rubik">Our Mail</div>
                                                <div class="heading-16px-rubik">yourname@mail.com</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
