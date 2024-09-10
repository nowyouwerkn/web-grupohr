<section class="section-clients">
    <div class="container">
        <h2 class="body-large">Nuestros Proveedores</h2>
        <hr>
    </div>

    <div class="owl-carousel client-carousel">
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/clients/logo-placeholder.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/clients/logo-placeholder.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/clients/logo-placeholder.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/clients/logo-placeholder.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/clients/logo-placeholder.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/clients/logo-placeholder.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/clients/logo-placeholder.png') }}" alt="">
            </div>
        </div>
    </div>
</section>


@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.client-carousel').owlCarousel({
    loop:true,
    margin:120,
    nav:false,
    dots:false,
    items:7,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
  });
</script>
@endpush