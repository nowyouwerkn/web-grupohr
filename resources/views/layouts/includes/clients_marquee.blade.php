<section class="section-clients">
    <div class="container">
        <h2 class="body-large">Nuestros Proveedores</h2>
        <hr>
    </div>

    <div class="owl-carousel client-carousel">
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/suppliers/logo-1.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/suppliers/logo-2.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/suppliers/logo-3.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/suppliers/logo-4.jpg') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/suppliers/logo-5.jpg') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/suppliers/logo-6.png') }}" alt="">
            </div>
        </div>
        <div class="item">
            <div class="logo-wrap">
                <img src="{{ asset('img/suppliers/logo-7.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>


@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.client-carousel').owlCarousel({
    loop:true,
    
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:3,
            margin:60,
        },
        600:{
            items:5,
            margin:120,
        },
        1000:{
            items:7,
            margin:120,
        }
    }
  });
</script>
@endpush