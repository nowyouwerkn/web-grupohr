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
                <h2 class="h3 offset-title">Hacemos de los detalles <w>de tu casa una</w> realidad de ensueño <span class="dot"></span></h2>
            </div>
        </div>

        <div class="content-block-overlay">
            <p class="top-text"><span>01</span> Casa Lomas - Restaurante Clásico Propuesta PVC</p>
            <p>Si tienes una visión, la construiremos. Desde proyectos modulares hasta proyectos personalizados, todos perfectamente sostenibles. Cada proyecto pensado para responder a tu visión arquitectónica.</p>
            <a href="" class="btn btn-primary">Descubre más</a>
        </div>
    </div>
</section>

<section class="section-gallery-video">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Acerca de Nosotros</h5>
                    <hr>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-end">
            <div class="col-md-5">
                <h3>Le damos el toque final a tu espacio</h3>
                <p>Somos solucionadores integrales, creemos en tu proyecto y que los logros en equipo son los que verdaderamente importan.</p>
            </div>
        </div>
    
        <div class="owl-carousel gallery-carousel">
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
</section>

<section class="section-process dark-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Nuestro Proceso</h5>
                    <hr>
                </div>
            </div>

            <div class="col-md-3">
                <p>Nuestros diseñadores tienen una amplia experiencia en la creación de interiores de diferentes estilos y niveles de complejidad.</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.includes.testimonials_v2')

<section class="section-image-separator">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-block-overlay">
                    <h2>Cada proyecto pensado para responder a tu visión arquitectónica.</h2>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.includes.clients_marquee')

<section class="section-experience">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex align-items-end">
                    <h3 class="hiper-big">8</h3>
                    <h3>años de proyectos <span class="dot"></span></h3>
                </div>
            </div>
            <div class="col-md-6">
                <p>¡Estamos orgullosos de nuestros logros y estamos listos para compartir nuestro profesionalismo contigo!</p>
                <div class="row">
                    <div class="col-md-4">
                        <h5>200+</h5>
                        <p>Proyecto completados</p>
                    </div>
                    <div class="col-md-4">
                        <h5>30+</h5>
                        <p>Proveedores exclusivos</p>
                    </div>
                    <div class="col-md-4">
                        <h5>15+</h5>
                        <p>Premios de arquitectura</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

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