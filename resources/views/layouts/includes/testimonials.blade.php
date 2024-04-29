<section class="section-testimonial">
    <div class="container">
        <div class="owl-carousel testimonial-carousel">
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="media d-flex align-items-center">
                            <img src="{{ asset('img/user-face.png') }}" alt="">
                            <div>
                                <p class="body-regular medium text-uppercase mb-0">Abogada</p>
                                <h5 class="h6 mb-0">Elizabeth Cracozia</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <h5 class="body-large">Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p class="body-regular pe-5">HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="media d-flex align-items-center">
                            <img src="{{ asset('img/user-face.png') }}" alt="">
                            <div>
                                <p class="body-regular medium text-uppercase mb-0">Abogada</p>
                                <h5 class="h6 mb-0">Elizabeth Cracozia</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <h5 class="body-large">Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p class="body-regular pe-5">HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="media d-flex align-items-center">
                            <img src="{{ asset('img/user-face.png') }}" alt="">
                            <div>
                                <p class="body-regular medium text-uppercase mb-0">Abogada</p>
                                <h5 class="h6 mb-0">Elizabeth Cracozia</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <h5 class="body-large">Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p class="body-regular pe-5">HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="media d-flex align-items-center">
                            <img src="{{ asset('img/user-face.png') }}" alt="">
                            <div>
                                <p class="body-regular medium text-uppercase mb-0">Abogada</p>
                                <h5 class="h6 mb-0">Elizabeth Cracozia</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <h5 class="body-large">Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p class="body-regular pe-5">HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.testimonial-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    items:1,
  });
</script>
@endpush