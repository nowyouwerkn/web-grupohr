<section class="section-testimonial">
    <div class="container">
        <div class="owl-carousel testimonial-carousel">
            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="media d-flex">
                            <img src="{{ asset('img/user-face.png') }}" alt="">
                            <div>
                                <p>Abogada</p>
                                <p>Elizabeth Cracozia</p>
                            </div>
                        </div>

                        <h5>Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p>HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                    <div class="col-md-6">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="media d-flex">
                            <img src="" alt="">
                            <div>
                                <p>Abogada</p>
                                <p>Elizabeth Cracozia</p>
                            </div>
                        </div>

                        <h5>Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p>HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                    <div class="col-md-6">
                        <img src="" alt="">
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="media d-flex">
                            <img src="" alt="">
                            <div>
                                <p>Abogada</p>
                                <p>Elizabeth Cracozia</p>
                            </div>
                        </div>

                        <h5>Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p>HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                    <div class="col-md-6">
                        <img src="" alt="">
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
    dots:true,
    items:1,
  });
</script>
@endpush