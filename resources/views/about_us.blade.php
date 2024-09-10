@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
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
            <p>Si tienes una visión, la construiremos. Desde proyectos modulares hasta proyectos personalizados, todos perfectamente sostenibles. Cada proyecto pensado para responder a tu visión arquitectónica.</p>
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
    
        <div class="row justify-content-end">
            <div class="col-md-5 text-end pe-5">
                <h3 class="h4 mb-4">Le damos el toque final a tu espacio</h3>
                <p class="ps-4">Somos solucionadores integrales, creemos en tu proyecto y que los logros en equipo son los que verdaderamente importan.</p>
            </div>
        </div>
    
        <div class="owl-carousel gallery-carousel">
            <div class="item">
                <div class="gallery-image-wrap">
                    <img src="{{ asset('img/product-placeholder.png') }}" alt="">
                </div>
    
                <div class="gallery-info">
                    <p>Video promocional sobre nosotros. ¡Conócenos!</p>
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
                <p>Nuestros diseñadores tienen una amplia experiencia en la creación de interiores de diferentes estilos y niveles de complejidad.</p>
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
                    <p>El primer contacto es que conozcas nuestro Showroom dedicado totalmente a ti.</p>
                    <img src="{{ asset('img/process-1.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row process-row">
            <div class="col-md-5">
                <div class="process-title">
                    <span>02</span> 
                    <h4 class="h4 mb-0">Desarrollamos tu concepto <span class="dot"></span></h4>
                </div>
            </div>

            <div class="timeline-dot"></div>

            <div class="col-md-5 offset-md-2">
                <div class="process-info">
                    <p>Crearemos una propuesta alineada a tus necesidades a partir de la primera reunión.</p>
                    <img src="{{ asset('img/process-2.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row process-row">
            <div class="col-md-5">
                <div class="process-title">
                    <span>03</span>
                    <h4 class="h4 mb-0">Producimos con alta calidad <span class="dot"></span></h4>
                </div>
            </div>

            <div class="timeline-dot"></div>

            <div class="col-md-5 offset-md-2">
                <div class="process-info">
                    <p>Después de que apruebes la propuesta mandamos a producir tus piezas con  la más alta calidad y compromiso con el detalle.</p>
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