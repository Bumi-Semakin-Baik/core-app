@include('landing.template.header2')


<body>
    <div class="boxed blog">
        <!-- Preloader -->
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
    </div>

        <!-- top header -->
        {{-- <div class="top-header">
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

        </header> --}}
        <!-- /header -->

        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title2">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="section-title">
                                Donate
                            </div>
                            <div class="section-subtitle">
                                <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner" style="color: white">Donate</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- Our services -->
        <section class="flat-why-choose-us" id="donat">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
                <div class="row">
                    @php
                        $currDate = new DateTime('now');
                    @endphp
                    @foreach ($donations as $donation)
                    @php
                        $target = $donation->target;
                        $collected = $donation->collected;
                        $progress = $collected != 0 ? ($collected / $target) * 100: 0;

                        $dueDate = date_create($donation->due_date);
                        $dateDiff = date_diff($currDate, $dueDate);
                    @endphp
                    <div class="item-three-column mg-bottom-60 wow fadeInUp">
                        <article class="flat-WCU-box grow-up-hover">
                            <div class="WCU-image">
                                <img class="grow-up-hover" src="{{ Storage::url($donation->image) }}" alt="images">
                            </div>
                            <div style="padding-left: 18px;">
                                <div class="content-features">
                                    <a href="{{ url('donate',$donation->id) }}">
                                        <h3 class="section-heading-rubik-size20">{{$donation->title}}</h3>
                                    </a>

                                <div style="margin-top: 1.5rem;">
                                    <small style="color: #111;">UKM Tani: {{$donation->nama_ukm}}</small>
                                    <div class="progress" style="width: 100%;margin-top: 0.5rem;">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">{{ $progress }}%</div>
                                    </div>
                                </div>
                                    <div class="row" style="margin-top: 0.2rem;">
                                        <div class="col-md-6" style="padding-left: 20px;">
                                            <small style="color: #111;"><strong>Rp. {{ number_format($donation->collected)}}</strong></small>
                                            <br>
                                            <small style="color: #111;">Pohon terkumpul</small>
                                        </div>
                                        <div class="col-md-6">
                                            @if ($dateDiff->format("%R") == "+")
                                                @if ($dateDiff->format("%a") == "0")
                                                    <small style="color: #111;float: right;"><strong>Hari ini</strong></small>
                                                @else
                                                    <small style="color: #111;float: right;"><strong>{{ $dateDiff->format("%a") }}</strong> hari lagi</small>
                                                @endif
s                                           @else
                                                <small style="color: #111;float: right;"><strong>Selesai</strong></small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-read-more link-style2">
                                <a href="{{ url('donate',$donation->id) }}" class="read-more btn-read-more">Donasi</a>
                            </div>
                        </article>
                    </div>
                    @endforeach
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
