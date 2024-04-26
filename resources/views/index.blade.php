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
                    <span class="big-num">01</span>
                    <p><span>01</span> Casa Lomas - Restaurante Clásico. Propuesta PVC</p>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="banner">
                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                    
                <div class="banner-info">
                    <span class="big-num">01</span>
                    <p><span>01</span> Casa Lomas - Restaurante Clásico. Propuesta PVC</p>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="banner">
                <img src="{{ asset('img/banner-placeholder.png') }}" alt="">
                    
                <div class="banner-info">
                    <span class="big-num">01</span>
                    <p><span>01</span> Casa Lomas - Restaurante Clásico. Propuesta PVC</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <h1>Vivir mejor comienza en casa.</h1>
                <div class="d-flex justify-content-end">
                    <p>Nos esforzamos por hacer de su hogar un lugar que estará feliz de regresar todos los días. ¡Creemos juntos el interior de sus sueños!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-about">
    <div class="scroll-text scroll-left">
        <h1>Grupo HR</h1>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <hr>
                    <h5>Acerca de nosotros</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>La premisa de nuestro trabajo de diseño es la voluntad de diseñar.</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>El objetivo de cada trabajo de construcción es encontrar una expresión que vaya más allá de lo necesario. Los proyectos se desarrollan dentro de su contexto cultural y reflejan las características específicas de su situación.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Los atributos funcionales de nuestros diseños y la durabilidad de la construcción son la base para un uso económico, además de ecológico, de los recursos disponibles.</p>
                        <p>Por ello, para nuestro despacho concede gran importancia a la selección de los materiales adecuados y a garantizar la calidad artesanal de todos los trabajos de construcción, hasta el más mínimo detalle.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="about-image-gallery">
                    <div class="image-wrap">
                        <img src="{{ asset('img/about-us-1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="image-wrap">
                        <img src="{{ asset('img/about-us-1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="image-wrap">
                        <img src="{{ asset('img/about-us-1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="image-wrap">
                        <img src="{{ asset('img/about-us-1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="image-wrap">
                        <img src="{{ asset('img/about-us-1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.includes.clients_marquee')

<section class="section-showroom-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Descubre nuestro showroom <span class="dot"></span></h2>
            </div>
        </div>
    </div>

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
</section>

<section class="section-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Nuestros Productos</h5>
                    <hr>
                </div>
            </div>
        </div>

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
        

        <div class="row align-items-end">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Cancelería de PVC <span class="dot"></span></h1>
                    </div>

                    <div class="col-md-6">
                        <p>Nuestro producto TOP, ideal para conseguir excelente aislamiento acústico y térmico del exterior. En cuestión funcionalidad y diseño puedes elegir entre nuestras múltiples soluciones de aperturas que se adaptan a todos los espacios</p>
                    </div>
                    <div class="col-md-6">
                        <p>Otro plus de este producto es la variedad de colores y texturas tipo madera que harán que tu proyecto arquitectónico se eleve a su máximo potencial estético. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-end">
                <a href="" class="btn btn-primary">Descubre más</a>
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
    nav:true,
    dots:true,
    items:1,
  });

  $('.product-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:true,
    items:1,
  });
</script>
@endpush
