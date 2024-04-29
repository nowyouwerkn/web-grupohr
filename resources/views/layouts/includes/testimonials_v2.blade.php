<section class="section-testimonial">
    <div class="container">
        <div class="owl-carousel testimonial-carousel testimonial-carousel-bg">
            <div class="item">
                <div class="row">
                    <div class="col-md-5 pe-5">
                        <div class="media d-flex align-items-center">
                            <img src="{{ asset('img/user-face.png') }}" alt="">
                            <div>
                                <p class="body-regular medium text-uppercase mb-0">Abogada</p>
                                <h5 class="h6 mb-0">Elizabeth Cracozia</h5>
                            </div>
                        </div>

                        <h5 class="body-large">Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p class="body-regular pe-5">HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                    <div class="col-md-7">
                        <div class="owl-carousel testimonial-project-carousel">
                            <div class="item">
                                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                                
                                <a href="" class="btn btn-primary">Descubre el proyecto</a>
                                
                                <div class="project-info">
                                    <h4 class="h6 mb-2">Proyecto Casa Limas</h4>
                                    <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                                </div>
                            </div>
                    
                            <div class="item">
                                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                                
                                <a href="" class="btn btn-primary">Descubre el proyecto</a>
                                
                                <div class="project-info">
                                    <h4 class="h6 mb-2">Proyecto Casa Limas</h4>
                                    <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="row">
                    <div class="col-md-5 pe-5">
                        <div class="media d-flex align-items-center">
                            <img src="{{ asset('img/user-face.png') }}" alt="">
                            <div>
                                <p class="body-regular medium text-uppercase mb-0">Abogada</p>
                                <h5 class="h6 mb-0">Elizabeth Cracozia</h5>
                            </div>
                        </div>

                        <h5 class="body-large">Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p class="body-regular pe-5">HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                    <div class="col-md-7">
                        <div class="owl-carousel testimonial-project-carousel">
                            <div class="item">
                                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                                
                                <a href="" class="btn btn-primary">Descubre el proyecto</a>
                                
                                <div class="project-info">
                                    <h4 class="h6 mb-2">Proyecto Casa Limas</h4>
                                    <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                                </div>
                            </div>
                    
                            <div class="item">
                                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                                
                                <a href="" class="btn btn-primary">Descubre el proyecto</a>
                                
                                <div class="project-info">
                                    <h4 class="h6 mb-2">Proyecto Casa Limas</h4>
                                    <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row">
                    <div class="col-md-5 pe-5">
                        <div class="media d-flex align-items-center">
                            <img src="{{ asset('img/user-face.png') }}" alt="">
                            <div>
                                <p class="body-regular medium text-uppercase mb-0">Abogada</p>
                                <h5 class="h6 mb-0">Elizabeth Cracozia</h5>
                            </div>
                        </div>

                        <h5 class="body-large">Una idea que parecía imposible fue posible con GrupoHR</h5>
                        <p class="body-regular pe-5">HyR es una empresa muy bien estructurada, en lo personal, cuando manejas una obra, lo que quieres es un servicio puntual y de calidad, la recomiendo siempre</p>
                    </div>
                    <div class="col-md-7">
                        <div class="owl-carousel testimonial-project-carousel">
                            <div class="item">
                                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                                
                                <a href="" class="btn btn-primary">Descubre el proyecto</a>
                                
                                <div class="project-info">
                                    <h4 class="h6 mb-2">Proyecto Casa Limas</h4>
                                    <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                                </div>
                            </div>
                    
                            <div class="item">
                                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                                
                                <a href="" class="btn btn-primary">Descubre el proyecto</a>
                                
                                <div class="project-info">
                                    <h4 class="h6 mb-2">Proyecto Casa Limas</h4>
                                    <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                                </div>
                            </div>
                        </div>
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

  $('.testimonial-project-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    items:1,
  });
</script>
@endpush
