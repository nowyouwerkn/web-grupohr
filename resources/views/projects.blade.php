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
                    <h3 class="h3 offset-title mb-5">Conoce <w>nuestros</w> proyectos <span class="dot"></span></h3>
                    <p>Si tienes una visión, la construiremos. Desde proyectos modulares hasta proyectos personalizados, todos perfectamente sostenibles. Cada proyecto pensado para responder a tu visión arquitectónica.</p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="projects-cards-gallery">
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Proyecto Casa Lomas</h4>
                            <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Proyecto Casa Lomas</h4>
                            <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Proyecto Casa Lomas</h4>
                            <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Proyecto Casa Lomas</h4>
                            <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <a href="{{ route('project.detail', 'casa-lomas') }}" class="btn btn-primary">Descubre el proyecto</a>
                                
                        <div class="project-info">
                            <h4 class="h4 mb-2">Proyecto Casa Lomas</h4>
                            <p>Un estilo atemporal y permanente que solamente puede lograrse con el ímpetu y compromiso de Grupo HR</p>
                        </div>
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@endpush
