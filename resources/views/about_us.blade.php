@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">

<style>
    .gallery-carousel .owl-prev{
        background: transparent !important;
        border: 1px solid var(--black) !important;
        color: var(--black) !important;
    }

    .gallery-carousel .owl-nav {
        bottom: 135px !important;
    }

    .process-carousel .owl-nav {
        left: 30px;
    }
</style>
@endpush

@section('content')
<section class="section-image-cover section-about-us">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h3 offset-title">Hacemos de los detalles <w>de tu casa una</w> realidad de ensueño <span class="dot"></span></h2>
            </div>
        </div>

        <div class="content-block-overlay">
            {{--  
            <p class="top-text"><span>01</span> Casa Lomas - Restaurante Clásico Propuesta PVC</p>
            --}}
            <p>Con impacto geográfico en el centro del país, ubicamos nuestras oficinas centrales en León, Gto y extendemos nuestras obras y proyectos en ciudades como Guadalajara, Irapuato, Salamanca, Querétaro, CDMX y San Miguel de Allende.</p>
            <a href="{{ route('projects') }}" class="btn btn-primary">Descubre los proyectos</a>
        </div>
    </div>
</section>

<section class="section-gallery-video">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5 class="body-large">Acerca de Nosotros</h5>
                    <hr>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-start">
            <div class="col-md-5 pe-5">
                <h3 class="h4 mb-4">Le damos el toque final a tu espacio <span class="dot"></span></h3>
                <p>Somos solucionadores integrales, creemos en tu proyecto y que los logros en equipo son los que verdaderamente importan.</p>
            </div>
        </div>
    
        <div class="owl-carousel gallery-carousel">
            <div class="item">
                <div class="gallery-image-wrap">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/LoJYE3D3Kqo?si=hbB6iPvSSUmqZZOo" frameborder="0" allow="none" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                    {{--  
                    <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                    --}}
                </div>
    
                <div class="gallery-info">
                    <p>Con 10 años de experiencia, en Grupo HR contamos con más de 60 colaboradores en nuestro equipo para brindarte el trato profesional, formal y puntual que tu empresa se merece.</p>
                </div>
            </div>
    
            <div class="item">
                <div class="gallery-image-wrap">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/AaRqPtJplOw?si=s8ZKcpCzjxv42m95" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
    
                <div class="gallery-info">
                    <p>Conoce nuestros showrooms en León, Gto y San Miguel de Allende, donde encontrarás ejemplares y muestrarios de toda la variedad que ofrecemos en cancelería de PVC, aluminio, cristales templados, herrajes, persianas enrollables, cortinas de tela y toldos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-process dark-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title" style="z-index: 1">
                    <h5>Nuestro Proceso</h5>
                    <hr>
                </div>
            </div>

            <div class="col-md-3">
                <p>Nuestro equipo integral de arquitectos, ingenieros y expertos en cancelería trabajan en estrecha colaboración para diseñar y desarrollar soluciones personalizadas que combinen funcionalidad, comodidad y estética.</p>
            </div>
        </div>
    </div>

    <div class="container process-container">
        <div class="timeline"></div>

        <div class="row process-row">
            <div class="col-md-5">
                <div class="process-title">
                    <span>01</span>
                    <h4 class="h4 mb-0"> Identificamos tus necesidades y te asesoramos <span class="dot ms-0"></span></h4>
                </div>
            </div>

            <div class="timeline-dot"></div>

            <div class="col-md-5 offset-md-2">
                <div class="process-info">
                    <p>Juntos, nos esforzamos por crear soluciones para tu proyecto que no solo satisfagan tus necesidades, sino que también superemos tus expectativas en términos de diseño y calidad.</p>

                    <div class="owl-carousel process-carousel">
                        <div class="item">
                            <img src="{{ asset('img/process-0.png') }}" alt="">
                        </div>
                
                        <div class="item">
                            <img src="{{ asset('img/process-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row process-row">
            <div class="col-md-5">
                <div class="process-title">
                    <span>02</span> 
                    <h4 class="h4 mb-0">Diseñamos tu propuesta y te cotizamos <span class="dot ms-0"></span></h4>
                </div>
            </div>

            <div class="timeline-dot"></div>

            <div class="col-md-5 offset-md-2">
                <div class="process-info">
                    <p>Con nuestra pasión por la innovación y nuestro compromiso con la excelencia, trabajamos en las soluciones que transformen y eleven el valor de tus espacios. Escuchando siempre tus necesidades, adaptándonos a tu presupuesto y asesorando para que tengas la mejor inversión.</p>
                    <img src="{{ asset('img/process-2.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row process-row">
            <div class="col-md-5">
                <div class="process-title">
                    <span>03</span>
                    <h4 class="h4 mb-0">Ejecución <span class="dot ms-0"></span></h4>
                </div>
            </div>

            <div class="timeline-dot"></div>

            <div class="col-md-5 offset-md-2">
                <div class="process-info">
                    <p>Una vez aprobada la propuesta económica y de diseño... ¡manos a la obra! Nuestro equipo se encargará de fabricar cada pieza de tu pedido con la más alta calidad y posteriormente pasaremos a la instalación de las mismas con el compromiso de cuidar cada detalle.</p>
                    
                    <div class="owl-carousel process-carousel">
                        <div class="item">
                            <img src="{{ asset('img/process-3.png') }}" alt="">
                        </div>
                
                        <div class="item">
                            <img src="{{ asset('img/process-4.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row process-row">
            <div class="col-md-5">
                <div class="process-title">
                    <span>04</span>
                    <h4 class="h4 mb-0">Post-venta <span class="dot ms-0"></span></h4>
                </div>
            </div>

            <div class="timeline-dot"></div>

            <div class="col-md-5 offset-md-2">
                <div class="process-info">
                    <p>Ya concluido nuestro trabajo... ¡no nos vamos hasta que estés conforme con nuestro trabajo! Atendiendo todos los detalles que por obra se necesiten y comprometidos con respaldar las garantías con las que cuentan tus productos.</p>
                    <img src="{{ asset('img/process-5.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

{{--  
@include('layouts.includes.testimonials_v2')


<section class="section-image-separator">
    <div class="container">
        <div class="row">
            <div class="col-md-6 position-relative">
                <div class="separator-border-wrap">
                    <h2 class="h4">Cada proyecto pensado para responder a tu visión arquitectónica <span class="dot"></span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
--}}

<div class="no-border-marquee">
    @include('layouts.includes.clients_marquee')
</div>

<section class="section-experience pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-end">
                    <h3 class="hiper-big outline-text display-1">9</h3>
                    <h3 class="h3">años de proyectos <span class="dot"></span></h3>
                </div>
            </div>
            <div class="col-md-6">
                <p class="body-regular mb-4">¡Crecemos por y para tí! Gracias por ser parte de estos 9 años!</p>
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="h5 mb-0">60+</h5>
                        <p>colaboradores</p>
                    </div>

                    {{-- 
                    <div class="col-md-4">
                        <h5 class="h5 mb-0">200</h5>
                        <p>proyectos entregados</p>
                    </div>
                    --}}
                    <div class="col-md-4">
                        <h5 class="h5 mb-0">11+</h5>
                        <p>ciudades abarcadas</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 pt-5">
            <div class="owl-carousel reels-carousel">
                <div class="item">
                    <div class="gallery-image-wrap">
                        <iframe width="100%" height="500" src="https://player.vimeo.com/video/1045077471?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" title="AMAMOS EL PROCESO"></iframe>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                </div>
        
                <div class="item">
                    <div class="gallery-image-wrap">
                        <iframe width="100%" height="500" src="https://player.vimeo.com/video/1045075587?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" title="CONOCE NUESTRAS INSTALACIONES"></iframe>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery-image-wrap">
                        <iframe width="100%" height="500" src="https://player.vimeo.com/video/1045070150?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" title="PROYECTO DE CANCELERÍA PVC Y TEMPLADOS"></iframe>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery-image-wrap">
                        <iframe width="100%" height="500" src="https://player.vimeo.com/video/1045067145?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" title="BACK ON TRACK 2025!"></iframe>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.gallery-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    items:1,
  });
</script>

<script>
    $('.process-carousel').owlCarousel({
        loop:true,
        margin:15,
        dots:false,
        items:1,
        autoplay:true,
        autoplayTimeout:2500,
        autoplayHoverPause:true,
        responsive:{
            0:{
                nav:false,
            },
            600:{
                nav:false,
            },
            1000:{
                nav:true,
            }
        }
    });
  </script>

<script>
    $('.reels-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1,
                margin:60,
            },
            600:{
                items:2,
                margin:60,
            },
            1000:{
                items:4,
                margin:60,
            }
        }
    });
  </script>
@endpush