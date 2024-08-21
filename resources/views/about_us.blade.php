@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section-image-cover">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h3 offset-title">Somos solucionadores integrales, <w>creemos en tu proyecto y que los logros </w> en equipo son los que verdaderamente importan. <span class="dot"></span></h2>
            </div>
        </div>

        <div class="content-block-overlay">
            {{-- <p class="top-text"><span>01</span> Casa Lomas - Restaurante Clásico Propuesta PVC</p> --}}
            <p>Buscamos mejorar e innovar hasta los más mínimos detalles, apoyándonos  siempre de  la estética y la funcionalidad, porque nuestro propósito es darle el toque final a tu espacio.</p>
            <a href="{{ route('projects') }}" class="btn btn-primary">CONOCE NUESTROS PROYECTOS</a>
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
    
        <div class="row justify-content-end">
            <div class="col-md-5 text-end pe-5">
                <h3 class="h4 mb-4">Le damos el toque final a tu espacio</h3>
                <p class="ps-4">Buscamos mejorar e innovar hasta los más mínimos detalles, apoyándonos  siempre de  la estética y la funcionalidad, porque nuestro propósito es darle el toque final a tu espacio.</p>
            </div>
        </div>
    
        <div class="owl-carousel gallery-carousel">
            <div class="item">
                <div class="gallery-image-wrap">
                    <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                </div>
    
                <div class="gallery-info">
                     <li>Con 10 años de experiencia, en Grupo HR contamos</li> 
                     <li>con más de 50 colaboradores en nuestro equipo para</li>
                     <li>brindarte el trato profesional, formal y puntual que tu empresa se merece.</li>
                </div>
            </div>
    
            <div class="item">
                <div class="gallery-image-wrap">
                    <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                </div>
    
                <div class="gallery-info">
                    <ul class="list-unstyled">
                        <li>Conoce nuestros showrooms en León, Gto y San Miguel de Allende,</li>
                        <li>donde encontrarás ejemplares y muestrarios de toda la variedad que ofrecemos</li>
                        <li>en cancelería de PVC, aluminio, cristales templados, herrajes.</li>
                    {{--    
                    </ul>
                </div>
            </div>
    
            <div class="item">
                <div class="gallery-image-wrap">
                    <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                </div>
    
                <div class="gallery-info">
                    <ul class="list-unstyled">
                        <li>Vergel de la Sierra, Guanajuato</li>
                        <li>Residencial, Privado</li>
                        <li>2022</li>
                        --}}
                    </ul>
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
                    <h4 class="h4 mb-0"> Identificamos tus necesidades <span class="dot"></span></h4>
                </div>
            </div>

            <div class="timeline-dot"></div>

            <div class="col-md-5 offset-md-2">
                <div class="process-info">
                    <p>Juntos, nos esforzamos por crear soluciones para tu proyecto que no solo satisfagan tus necesidades, sino que también superemos tus expectativas en términos de diseño y calidad.</p>
                    <img src="{{ asset('img/process-1.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row process-row">
            <div class="col-md-5">
                <div class="process-title">
                    <span>02</span> 
                    <h4 class="h4 mb-0">Cotizamos y asesoramos <span class="dot"></span></h4>
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
                    <h4 class="h4 mb-0">Ejecución <span class="dot"></span></h4>
                </div>
            </div>

            <div class="timeline-dot"></div>

            <div class="col-md-5 offset-md-2">
                <div class="process-info">
                    <p>Una vez aprobada la propuesta económica y de diseño... ¡manos a la obra! Nuestro equipo se encargará de fabricar cada pieza de tu pedido con la más alta calidad y posteriormente pasaremos a la instalación de las mismas con el compromiso de cuidar cada detalle.</p>
                    <img src="{{ asset('img/process-3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

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

<div class="no-border-marquee">
    @include('layouts.includes.clients_marquee')
</div>

<section class="section-experience">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-end">
                    <h3 class="hiper-big outline-text display-1">8</h3>
                    <h3 class="h3">años de proyectos <span class="dot"></span></h3>
                </div>
            </div>
            <div class="col-md-6">
                <p class="body-regular mb-4">¡Estamos orgullosos de nuestros logros y estamos listos para compartir nuestro profesionalismo contigo!</p>
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="h5 mb-0">200+</h5>
                        <p>Proyecto completados</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="h5 mb-0">30+</h5>
                        <p>Proveedores exclusivos</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="h5 mb-0">15+</h5>
                        <p>Premios de arquitectura</p>
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
@endpush
