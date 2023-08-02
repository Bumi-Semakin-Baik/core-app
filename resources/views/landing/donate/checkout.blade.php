@include('landing.template.header2')
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="inner-title2">
                    <div class="overlay-image"></div>
                    <div class="banner-title">
                        <div class="page-title-heading">
                            Donasi Checkout
                        </div>
                        <div class="page-title-content link-style6">
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
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget-contact-services-details mg-bottom-25">
                                <div class="sidebar-title mg-bottom-25">
                                    <h2 class="section-heading-jost-size28 text-pri2-color">Detail</h2>
                                </div>
                                <ul class="widget-sidebar-contact-us text-pri2-color section-heading-rubik-size16">
                                    <li><span class="">Nama:</span><span class="info-contact-us">{{ $order['name']}}</span></li>
                                    <li><span class="">Email:</span><span class="info-contact-us">{{ $order['email']}}</span></li>
                                    <li><span class="">Total Donasi:</span><span class="info-contact-us">Rp. {{ number_format($order['totalPrice'])}}</span></li>
                                </ul>

                                <div class="text-center" style="margin-top: 2rem;margin-bottom: 2rem;">
                                    <button class="btn btn-primary" id="pay-button">Bayar sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                </div>
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="172" data-mobile="100" data-smobile="60"></div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.template.footer')

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
                 /* You may add your own implementation here */
            $.ajax({
                url: "{{ url('payment/save-transaction') }}",
                'crossDomain': true,
                method: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: "{{ $order['name'] }}",
                    email: "{{ $order['email'] }}",
                    totalPrice: "{{ $order['totalPrice'] }}",
                    donateId: "{{ $order['idDonate'] }}",
                    orderCode: result.orderId,
                    status: result.transaction_status,
                    methodType: result.payment_type,
                },
                success: function(res){
                    window.location.href = "{{ url('payment/running') . '/'  }}" + res;
                }
            });
              alert("payment success!"); console.log(result);
            },
            onPending: function(result){
                console.log(result);
                $.ajax({
                url: "{{ url('payment/save-transaction') }}",
                'crossDomain': true,
                method: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: "{{ $order['name'] }}",
                    email: "{{ $order['email'] }}",
                    totalPrice: "{{ $order['totalPrice'] }}",
                    donateId: "{{ $order['idDonate'] }}",
                    orderCode: result.order_id,
                    status: result.transaction_status,
                    methodType: result.payment_type,
                },
                success: function(res){
                    window.location.href = "{{ url('payment/running') . '/'  }}" + res;
                }
            });
            },
            onError: function(result){
                $.ajax({
                url: "{{ url('payment/save-transaction') }}",
                'crossDomain': true,
                method: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: "{{ $order['name'] }}",
                    email: "{{ $order['email'] }}",
                    totalPrice: "{{ $order['totalPrice'] }}",
                    donateId: "{{ $order['idDonate'] }}",
                    orderCode: result.orderId,
                    status: result.transaction_status,
                    methodType: result.payment_type,
                },
                success: function(res){
                    window.location.href = "{{ url('payment/running') . '/'  }}" + res;
                }
            });
            },
            onClose: function(){
              /* You may add your own implementation here */
            }
          })
        });
      </script>
