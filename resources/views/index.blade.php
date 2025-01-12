@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">

<style>
    .gallery-carousel .owl-nav {
        left: 50% !important;
        right: initial !important;
        bottom: -30px !important;
        transform: translateX(-50%) !important;
    }

    .gallery-carousel .owl-prev{
        background: transparent !important;
        border: 1px solid var(--black) !important;
        color: var(--black) !important;
    }
</style>
@endpush

@section('content')
<section class="section-intro">
    <div class="overlay"></div>
    <div class="owl-carousel intro-carousel">
        <div class="item">
            <div class="banner">
                <img class="img-desktop" src="{{ asset('img/banner-1.png') }}" alt="">
                <img class="img-responsive" src="{{ asset('img/banner-1-res.png') }}" alt="">
                    
                <div class="banner-info">
                    <span class="big-num display-1 outline-text">01</span>
                    <p class="p"><span>01</span> Cancelería de Aluminio y PVC</p>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="banner">
                <img class="img-desktop" src="{{ asset('img/banner-2.png') }}" alt="">
                <img class="img-responsive" src="{{ asset('img/banner-2-res.png') }}" alt="">
                    
                <div class="banner-info">
                    <span class="big-num display-1 outline-text">02</span>
                    <p><span>02</span> Cristales templados, barandales y espejos</p>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="banner">
                <img class="img-desktop" src="{{ asset('img/banner-3.png') }}" alt="">
                <img class="img-responsive" src="{{ asset('img/banner-3-res.png') }}" alt="">
                    
                <div class="banner-info">
                    <span class="big-num display-1 outline-text">03</span>
                    <p><span>03</span> Cortinas enrollables, de tela y toldos</p>
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
                <h1 class="h2 offset-title">Le damos el <w>toque final</w> a tu espacio <span class="dot"></span></h1>
            </div>

            <div class="col-md-3 offset-md-1">
                <ul class="list-unstyled intro-menu">
                    <li><a href="{{ route('projects') }}">Proyectos Integrales</a></li>
                    <li><a href="{{ route('about.us') }}">Nosotros</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>

        <div class="row align-items-end mt-5">
            <div class="col-md-3 offset-md-2">
                <div class="d-flex justify-content-end">
                    <p class="pe-3">¡Hola! Somos Grupo HR, si estás buscando servicio profesional para tu proyecto, permítenos asesorarte y acompañarte en este proceso.</p>
                </div>
            </div>

            <div class="col-md-3 offset-md-2">
                <p class="opacity-text">Grupo HR © {{ Carbon\Carbon::now()->format('Y') }}</p>
            </div>
        </div>
    </div>
</section>

<section class="section-about position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5 class="body-large">Acerca de nosotros</h5>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 pe-5">
                <div class="sticky-content-block">
                    <div class="scroll-text scroll-left">
                        <h1 class="display-1 outline-text">Grupo HR</h1>
                    </div>

                    <h2 class="h3 std-mb std-hug">Buscamos siempre lo estético y funcional <span class="dot"></span></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="body-regular">En Grupo HR somos más de 60 colaboradores trabajando día a día para brindarte el trato profesional, formal y puntual que tu proyecto se merece. Nuestra finalidad es proveer productos y servicios de la mejor calidad a constructoras, arquitectos y público en general.</p>
                        </div>
                        <div class="col-md-6">

                            <p class="body-regular mb-3">Ofrecemos fabricación e instalación de:</p>
                            <ul>
                                <li>Cancelería de PVC y Aluminio</li>
                                <li>Cristales templados y espejos</li>
                                <li>Cortinas enrollables, de tela y toldos</li>
                            </ul>
                            
                        </div>

                        <div class="col-md-6 mt-4">
                            <p class="body-regular">Buscamos mejorar e innovar hasta los más mínimos detalles, apoyándonos siempre de la estética y la funcionalidad, porque nuestro propósito es darle el toque final a tu espacio.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="about-image-gallery">
                    <div class="image-wrap">
                        <img src="{{ asset('img/gallery-1.webp') }}" alt="">
                    </div>
                    <div class="image-wrap">
                        <img src="{{ asset('img/gallery-2.webp') }}" alt="">
                    </div>
                    <div class="image-wrap">
                        <img src="{{ asset('img/gallery-3.webp') }}" alt="">
                    </div>
                    <div class="image-wrap">
                        <img src="{{ asset('img/gallery-4.webp') }}" alt="">
                    </div>
                    <div class="image-wrap">
                        <img src="{{ asset('img/gallery-5.webp') }}" alt="">
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
    </div>

    <div class="container position-relative">
        <div class="row justify-content-end">
            <div class="col-md-5 position-relative">
                <div class="showroom-list-content">
                    <h6 class="body-large bold text-uppercase">Fábrica, Showroom y<br> Oficinas <span>León</span></h6>
                    <p><a href="https://maps.app.goo.gl/CHfyRXSvP3BGS3zM8" target="_blank">Calle La Zorra 109, Col. Granja Ceres, C.P. 37289 León, Gto. México. <ion-icon name="arrow-forward-outline"></ion-icon></a></p>
                    <p><a href="tel:4773908382">(477) 390 8382</a></p>
                    <p><a href="https://api.whatsapp.com/send?phone=+524775579885">(477) 557 9885</a></p>
                    <br>
                    <h6 class="body-large bold text-uppercase">Showroom <br><span>San Miguel de Allende</span></h6>
                    <p><a href="https://maps.app.goo.gl/xQsE9VRrxAjzZvXP9" target="_blank">Camino Alcocer s/n, Jardines de Allende. San Miguel de Allende, Gto. México. <ion-icon name="arrow-forward-outline"></ion-icon></a></p>
                    <p><a href="https://api.whatsapp.com/send?phone=+524151032024">(415) 103 2024</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="owl-carousel gallery-carousel">
                <div class="item">
                    <div class="gallery-image-wrap">
                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/LoJYE3D3Kqo?si=hbB6iPvSSUmqZZOo" frameborder="0" allow="none" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="item">
                    <div class="gallery-image-wrap">
                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/AaRqPtJplOw?si=s8ZKcpCzjxv42m95" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
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
                    <h5 class="body-large">Nuestros Productos</h5>
                    <hr>
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
                                <img src="{{ asset('img/pvc/pvc-1.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Cancelería Residencial</li>
                                    <li>PVC Nogal</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/pvc/pvc-2.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Cancel Corredizo</li>
                                    <li>PVC Nogal</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/pvc/pvc-3.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Puertas Corredizas</li>
                                    <li>PVC Nogal</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/pvc/pvc-4.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Cancelería Residencial</li>
                                    <li>PVC Chocolate</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/pvc/pvc-5.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Cancelería Residencial</li>
                                    <li>PVC Nogal</li>
                                    <li>SMA, Gto.</li>
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
                            <p>Nuestro producto top, si lo que quieres es un espacio acústico, térmico y estético... escoge entre nuestras múltiples aperturas que se adaptan a todos lo espacios. Podrás elegir entre varios colores y texturas imitación madera.</p>
                        </div>
                        {{--
                        <div class="col-md-4 offset-md-1">
                            <p>Otro plus de este producto es la variedad de colores y texturas tipo madera que harán que tu proyecto arquitectónico se eleve a su máximo potencial estético.</p>
                        </div>
                        --}}
                    </div>
                </div>
                
                <div class="col-md-4 text-end">
                    <a href="{{ route('projects') }}" class="btn btn-primary">Descubre más</a>
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
                                <img src="{{ asset('img/aluminio/alum-1.webp') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Aluminio Eurovent.</li>
                                    <li>Color Chocolate.</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/aluminio/alum-2.webp') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Aluminio Eurovent.</li>
                                    <li>Color Blanco.</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/aluminio/alum-3.webp') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Aluminio Eurovent.</li>
                                    <li>Color Chocolate.</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/aluminio/alum-4.webp') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Aluminio Eurovent.</li>
                                    <li>Color Chocolate.</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/aluminio/alum-5.webp') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Aluminio Eurovent.</li>
                                    <li>Color Chocolate.</li>
                                    <li>León, Gto.</li>
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
                            <h1 class="h3">Cancelería <br> de Aluminio <span class="dot"></span></h1>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-5">
                            <p>Nuestro producto líder en puertas y ventanas. Con gran variedad de líneas como Eurovent y Panorama. Se destaca por su durabilidad, seguridad, variedad de colores y flexibilidad en medidas para ventanales grandes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <a href="{{ route('projects') }}" class="btn btn-primary">Descubre más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CRISTALES TEMPLADOS -->
    <div class="product-card">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="owl-carousel product-carousel">
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cristales/temp-1.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Barandal</li>
                                    <li>de cristal templado.</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cristales/temp-2.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Escalera curva</li>
                                    <li>de cristal templado.</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cristales/temp-3.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Cancel de baño</li>
                                    <li>de cristal templado.</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cristales/temp-4.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Puertas de cristal templado</li>
                                    <li>y espejo con LED</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cristales/temp-5.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Barandal</li>
                                    <li>de cristal templado</li>
                                    <li>León, Gto.</li>
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
                            <h1 class="h3">Cristales <br> templados <span class="dot"></span></h1>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-5">
                            <p>Lo más limpio, libre de marcos de aluminio o herrería, para lograr una función con efecto moderno... impleméntalo en barandales, canceles de baño, espejos, domos, ventanales y más.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <a href="{{ route('projects') }}" class="btn btn-primary">Descubre más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- PERSIANAS ENROLLABLES Y DE TELA -->
    <div class="product-card">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="owl-carousel product-carousel">
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cortinas/corti-1.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Persiana enrollable.</li>
                                    <li>Filtro ligero.</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cortinas/corti-2.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Cortina de Tela.</li>
                                    <li>Tergal.</li>
                                    <li>León, Guanajuato.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cortinas/corti-3.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                    <li>Persianas enrollables.</li>
                                    <li>Filtro Solar + Blackout</li>
                                    <li>León, Gto.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cortinas/corti-4.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                   <li>Cortina de Tela.</li>
                                    <li>Tergal.</li>
                                    <li>León, Guanajuato.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <div class="image-wrap">
                                <img src="{{ asset('img/cortinas/corti-5.png') }}" alt="">
                            </div>
            
                            <div class="product-info">
                                <ul class="list-unstyled">
                                   <li>Toldo</li>
                                    <li>Vertical.</li>
                                    <li>León, Guanajuato.</li>
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
                            <h1 class="h3">Cortinas, persianas enrollables <br> y toldos <span class="dot"></span></h1>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-5">
                            <p>Para el bloqueo solar en un espacio limpio, minimalista y práctico... escoge entre cientos de opciones para blackout, filtro solar, duo line, abatibles, manual o motorizados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <a href="{{ route('projects') }}" class="btn btn-primary">Descubre más</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{--  
@include('layouts.includes.testimonials')
--}}

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

  $('.gallery-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    items:1,
  });
</script>
@endpush
