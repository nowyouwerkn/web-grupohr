@extends('layouts.main')

@push('styles')
<style>
    .nav svg path{
        fill: var(--black);
        stroke: var(--black) !important;
    }

    .nav .logo{
        background: url("../img/logo_black.png") !important;
        background-position: center center !important;
        background-size: contain !important;
        background-repeat: no-repeat !important;
        width: 200px !important;
        height: 90px;
        position: relative !important;
        display: inline-block !important;
    }

    .nav .brand-color{
        fill: var(--main) !important;
        stroke: var(--main) !important;
    }

    .width-img{
        width: 100% !important;
        height: auto !important;
    }
</style>
@endpush

@section('content')
<section class="section-projects">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="project-title">
                    <h3 class="h3 offset-title mb-5">Conoce nuestro portafolio <span class="dot"></span></h3>
                    <p>Te compartimos algunos proyectos integrales de Cancelería tanto de Aluminio como de PVC, donde trabajamos de la mano de arquitectos y sus equipos o en ocasiones directamente con el cliente.</p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="projects-cards-gallery">

                    <a class="project-card-wrap" href="{{ route('project.detail', 'casa-hipico') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa Hípico</h4>
                            <p>Cancelería de PVC Rehau color Schwarzbraun para Rayas Arquitectos.</p>
                        </div>
                        <img src="{{ asset('img/projects/casa-hipico/cover.jpg') }}" alt="">
                    </a>

                    <a class="project-card-wrap" href="{{ route('project.detail', 'casa-jg') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa JG</h4>
                            <p>Cancelería de PVC Nogal y templados para BAP Inmuebles. Proyecto arquitectónico: Arq. Arturo Rayas.</p>
                        </div>
                        <img src="{{ asset('img/projects/casa-jg/cover.jpg') }}" alt="">
                    </a>

                    <a class="project-card-wrap" href="{{ route('project.detail', 'cortinas-terrazas') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Cortinas Terrazas</h4>
                            <p>Persianas enrollables y cortinas de tela para ventanales departamentales.</p>
                        </div>
                        <img src="{{ asset('img/projects/cortinas-terrazas/cover.jpg') }}" alt="">
                    </a>

                    <a class="project-card-wrap" href="{{ route('project.detail', 'casa-blanca') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa Blanca</h4>
                            <p>Proyecto de cancelería integral de Aluminio Blanco para JOBREKA arquitectura.</p>
                        </div>
                        <img src="{{ asset('img/projects/casa-blanca/cover.jpg') }}" alt="">
                    </a>

                    <a class="project-card-wrap" href="{{ route('project.detail', 'casa-mg') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa MG</h4>
                            <p>Cancelería de PVC Nogal. Diseño: Arq. Miguel Gómez y Construcción: Grupo HERPON.</p>
                        </div>
                        <img src="{{ asset('img/projects/casa-mg/cover.jpg') }}" alt="">
                    </a>

                    <a class="project-card-wrap" href="{{ route('project.detail', 'casa-cc') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa CC</h4>
                            <p>Cancelería de PVC Rehau color Schwarzbraun para Atypical Architecture.</p>
                        </div>
                        <img src="{{ asset('img/projects/casa-cc/cover.jpg') }}" alt="">
                    </a>

                    <a class="project-card-wrap" href="{{ route('project.detail', 'clinica-vandent') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Clínica Vandent</h4>
                            <p>Cancelería de Aluminio y PVC Rehau color blanco para cliente de Clínica Dental.</p>
                        </div>
                        <img class="width-img" src="{{ asset('img/projects/clinica-vandent/cover.jpg') }}" alt="">
                    </a>

                    <a class="project-card-wrap" href="{{ route('project.detail', 'casa-sorrento') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa Sorrento 1</h4>
                            <p>Cancelería de PVC color Nogal para Arq. Juan José Mena</p>
                        </div>
                        <img src="{{ asset('img/projects/casa-sorrento/cover.jpg') }}" alt="">
                    </a>

                    <a class="project-card-wrap" href="{{ route('project.detail', 'agencia-automotriz') }}">
                        <div class="btn btn-primary">Descubre el proyecto</div>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Agencia Automotriz</h4>
                            <p>Cancelería de Aluminio color Negro para Agencia Automotriz Irapuato.</p>
                        </div>
                        <img src="{{ asset('img/projects/agencia-automotriz/cover.jpg') }}" alt="">
                    </a>
                    

                    {{--  
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-jobreka') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa Blanca JOBREKA</h4>
                            <p>Proyecto de cancelería integral de <br> Aluminio Blanco para JOBREKA</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/projects/casa-jobreka-cover.jpg') }}" alt="">
                    </div>

                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-rayas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa JG RAYAS</h4>
                            <p>Proyecto de cancelería integral de <br> PVC Nogal para RAYAS Arquitectos.</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/projects/casa-rayas-cover.png') }}" alt="">
                    </div>
 
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-sorrento') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Casa SORRENTO MENA</h4>
                            <p>Proyecto de cancelería integral de PVC Nogal <br> para Arq. Juan José Mena.</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@endpush
