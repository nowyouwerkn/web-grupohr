@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section-intro">
    <div class="owl-carousel intro-carousel">
        <div class="item">
            <div class="banner">
                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                    
                <div class="banner-info">
                    <span class="big-num display-1 outline-text">01</span>
                    <p class="p"><span>01</span> Casa Lomas - Restaurante Clásico. Propuesta PVC</p>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="banner">
                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                    
                <div class="banner-info">
                    <span class="big-num display-1 outline-text">02</span>
                    <p><span>02</span> Casa Lomas - Restaurante Clásico. Propuesta PVC</p>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="banner">
                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                    
                <div class="banner-info">
                    <span class="big-num display-1 outline-text">03</span>
                    <p><span>03</span> Casa Lomas - Restaurante Clásico. Propuesta PVC</p>
                </div>
            </div>
        </div>
    </div>

    <div class="separator-border-effect">
        <div class="overlay-separator"></div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h2 offset-title">Vivir mejor <w>comienza</w> en casa <span class="dot"></span></h1>
            </div>

            <div class="col-md-3 offset-md-1">
                <ul class="list-unstyled intro-menu">
                    <li><a href="{{ route('projects') }}">Proyectos (120)</a></li>
                    <li><a href="{{ route('about.us') }}">Acerca de nosotros</a></li>
                    <li><a href="{{ route('contact') }}">Contáctanos</a></li>
                </ul>
            </div>
        </div>

        <div class="row align-items-end mt-5">
            <div class="col-md-3 offset-md-2">
                <div class="d-flex justify-content-end">
                    <p class="pe-3">Nos esforzamos por hacer de su hogar un lugar que estará feliz de regresar todos los días. ¡Creemos juntos el interior de sus sueños!</p>
                </div>
            </div>

            <div class="col-md-3 offset-md-2">
                <p class="opacity-text">Grupo HR © 2024</p>
            </div>
        </div>
    </div>
</section>

<section class="section-about position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <hr>
                    <h5 class="body-large">Acerca de nosotros</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 pe-5">
                <div class="sticky-content-block">
                    <div class="scroll-text scroll-left">
                        <h1 class="display-1 outline-text">Grupo HR</h1>
                    </div>

                    <h2 class="h3 std-mb std-hug">La premisa de nuestro trabajo de diseño es la voluntad de diseñar.</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="body-regular">El objetivo de cada trabajo de construcción es encontrar una expresión que vaya más allá de lo necesario. Los proyectos se desarrollan dentro de su contexto cultural y reflejan las características específicas de su situación.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body-regular mb-3">Los atributos funcionales de nuestros diseños y la durabilidad de la construcción son la base para un uso económico, además de ecológico, de los recursos disponibles.</p>
                            <p class="body-regular">Por ello, para nuestro despacho concede gran importancia a la selección de los materiales adecuados y a garantizar la calidad artesanal de todos los trabajos de construcción, hasta el más mínimo detalle.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="about-image-gallery">
                    <div class="image-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="image-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="image-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="image-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="image-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.includes.clients_marquee')

<section class="section-showroom-cta">
    {{-- 
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-5 position-relative">
                <div class="showroom-border-wrap">
                    <h2 class="h4">Descubre nuestro showroom <span class="dot"></span></h2>
                </div>
            </div>
        </div>
    </div>
    --}}

    <div class="owl-carousel showroom-carousel">
        <div class="item">
            <img src="{{ asset('img/showroom-placeholder.png') }}" alt="">
        </div>

        <div class="item">
            <img src="{{ asset('img/showroom-placeholder.png') }}" alt="">
        </div>

        <div class="item">
            <img src="{{ asset('img/showroom-placeholder.png') }}" alt="">
        </div>
    </div>

    <div class="container position-relative">
        <div class="row justify-content-end">
            <div class="col-md-3 position-relative">
                <div class="showroom-list-content">
                    <h6 class="body-large bold text-uppercase">Showroom <br><span>León</span></h6>
                    <p>Granjas Ceres 109, 37289 León de los Aldama, Gto.</p>
                    <p><a href="">477 555 55 55</a></p>
                    <br>
                    <br>
                    <h6 class="body-large bold text-uppercase">Showroom <br><span>San Miguel de Allende</span></h6>
                    <p>Granjas Ceres 109, 37289 León de los Aldama, Gto.</p>
                    <p><a href="">477 555 55 55</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <hr>
                    <h5>Nuestros Productos</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- CANCELERIA PVC -->
    <div class="product-card">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="owl-carousel product-carousel">
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="separator-border-effect">
            <div class="overlay-separator"></div>
        </div>
    
        <div class="container">
            <div class="row align-items-end ps-4">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5">
                            <h1 class="h3">Cancelería <br> de PVC <span class="dot"></span></h1>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-4">
                            <p>Nuestro producto TOP, ideal para conseguir excelente aislamiento acústico y térmico del exterior. En cuestión funcionalidad y diseño puedes elegir entre nuestras múltiples soluciones de aperturas que se adaptan a todos los espacios.</p>
                        </div>
                        <div class="col-md-4 offset-md-1">
                            <p>Otro plus de este producto es la variedad de colores y texturas tipo madera que harán que tu proyecto arquitectónico se eleve a su máximo potencial estético.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <a href="" class="btn btn-primary">Descubre más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CANCELERIA EUROVENT -->
    <div class="product-card">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="owl-carousel product-carousel">
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="separator-border-effect">
            <div class="overlay-separator"></div>
        </div>
    
        <div class="container">
            <div class="row align-items-end ps-4">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5">
                            <h1 class="h3">Cancelería <br> Eurovent <span class="dot"></span></h1>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-5">
                            <p>Es nuestro producto líder en puertas y ventanas de Aluminio. Con gran variedad de colores y sistemas de apertura que modulan el flujo de aire. Se destaca por su durabilidad y seguridad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <a href="" class="btn btn-primary">Descubre más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- PERSIANAS ENROLLABLES -->
    <div class="product-card">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="owl-carousel product-carousel">
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="separator-border-effect">
            <div class="overlay-separator"></div>
        </div>
    
        <div class="container">
            <div class="row align-items-end ps-4">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5">
                            <h1 class="h3">Persianas <br> Enrollables <span class="dot"></span></h1>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-5">
                            <p>Para un espacio limpio, minimalista y práctico... escoge entre cientos de opciones para blackout, filtro solar y duo line; ya sea con sistema manual o motorizado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <a href="" class="btn btn-primary">Descubre más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CORTINAS DE TELA -->
    <div class="product-card">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="owl-carousel product-carousel">
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Vergel de la Sierra, Guanajuato</li>
                                    <li>Residencial, Privado</li>
                                    <li>2022</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="separator-border-effect">
            <div class="overlay-separator"></div>
        </div>
    
        <div class="container">
            <div class="row align-items-end ps-4">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5">
                            <h1 class="h3">Cortinas <br> de Tela <span class="dot"></span></h1>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-5">
                            <p> Si lo que buscas es darle un toque cálido, elegante y contemporáneo a tus ventanas, elegir cortina de tela es tu mejor opción. Manejamos cortineros tipo hotelero para mayor practicidad, con varios modelos a elegir entre onda perfecta y pliegue francés; telas de tergal, blackout o dim out.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <a href="" class="btn btn-primary">Descubre más</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.includes.testimonials')

@endsection

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.intro-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:true,
    items:1,
  });

  $('.showroom-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    dots:false,
    items:1,
  });

  $('.product-carousel').owlCarousel({
    loop:true,
    margin:45,
    nav:true,
    dots:false,
    items:1,
  });
</script>
@endpush
