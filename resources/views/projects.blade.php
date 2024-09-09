@extends('layouts.main')

@push('styles')
<style>
    .nav svg path{
        fill: var(--black);
        stroke: var(--black) !important;
    }

    .nav .brand-color{
        fill: var(--main) !important;
        stroke: var(--main) !important;
    }
</style>
@endpush

@section('content')
<section class="section-projects">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="project-title">
                    <h3 class="h3 offset-title mb-5">Conoce <w>nuestro</w> portafolio <span class="dot"></span></h3>
                    <p>Te compartimos algunos proyectos integrales de Cancelería tanto de Aluminio como de PVC, donde trabajamos de la mano de arquitectos y sus equipos o en ocasiones directamente con el cliente.</p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="projects-cards-gallery">
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">CASA HERPON</h4>
                            <p>Proyecto de cancelería integral de Aluminio para Grupo HERPON</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">CASA BLANCA JOBREKA</h4>
                            <p>Proyecto de cancelería integral de Aluminio Blanco para JOBREKA</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">CASA JG RAYAS</h4>
                            <p>Proyecto de cancelería integral de PVC Nogal para RAYAS Arquitectos.</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">CASA SORRENTO MENA</h4>
                            <p>Proyecto de cancelería integral de PVC Nogal para Arq. Juan José Mena.</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                        {{--        
                        <div class="project-info">
                            <h4 class="h4 mb-2">Proyecto Casa Lomas</h4>
                            <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@endpush
