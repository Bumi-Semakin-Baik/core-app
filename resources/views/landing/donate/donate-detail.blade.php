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
        
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title2">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            Detail Donate
                        </div>
                        <div class="page-title-content link-style6">
                            <span><a class="home" href="index.html">Home</a></span><span class="page-title-content-inner">Donate</span>
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
                <div class="col-md-12 text-center">
                    <h1 class="section-heading-jost-size28 text-pri2-color">Rp25,000,000 / Rp. {{ number_format("$donations->target",2,',','.')}}</h1>
                </div>
                <div class="col-md-12" style="margin-bottom: 2rem;">
                    <div class="progress" style="width: 100%;margin-top: 0.5rem;">
                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget-contact-services-details mg-bottom-25">
                                <div class="sidebar-title mg-bottom-25">
                                    <h2 class="section-heading-jost-size28 text-pri2-color">Detail</h2>
                                </div>
                                <ul class="widget-sidebar-contact-us text-pri2-color section-heading-rubik-size16">
                                    <li><span class="">UKM Tani:</span><span class="info-contact-us">{{ $donations->nama_ukm}}</span></li>
                                    <li><span class="">Lokasi:</span><span class="info-contact-us">{{ $donations->nama_lokasi}}</span></li>
                                    <li><span class="">Jenis Pohon:</span><span class="info-contact-us">Kelapa, Alpukat, Apel</span></li>
                                    <!-- <li><span class="">Lokasi:</span><span class="info-contact-us">Kabupaten Pasuruan</span></li> -->
                                    <li><span class="">Batas Donasi:</span><span class="info-contact-us">{{ $donations->due_date}}</span></li>
                                    <li><span class="">Penanaman:</span><span class="info-contact-us">2 Desember 2023</span></li>
                                </ul>
                                <div class="text-center" style="margin-top: 2rem;margin-bottom: 2rem;"><a class="button-services" href="{{ url('donate-payment',$donations->id) }}">Donasi Sekarang</a></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="widget-contact-services-details">
                                <div class="sidebar-title">
                                    <h2 class="section-heading-jost-size28 text-pri2-color" style="margin-bottom: 2rem;">Maps</h2>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23906.438912134585!2d112.59822067667407!3d-7.93239454234086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788336a1916897%3A0xb67cf5eba2d62332!2sKelapa%20Gading%20Coffee%2C%20Mocktail%20%26%20Eatery!5e0!3m2!1sen!2sid!4v1687869955606!5m2!1sen!2sid"
                                        width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                </div>
                <div class="col-md-8">
                    <article class="content-service-details">
                        <div class="post-service-details bd-radius-8-image mg-bottom-45">
                            <img src="{{ asset('asset/donate3.jpg') }}" alt="imagess">
                        </div>
                        <h2 class="section-heading-jost-size34 text-pri2-color mg-bottom30">{{ $donations->title}}</h2>
                        <p class="section-desc mg-bottom-20">{{ $donations->description}}</p>
                    </article>
                </div>
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="172" data-mobile="100" data-smobile="60"></div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.template.footer')
