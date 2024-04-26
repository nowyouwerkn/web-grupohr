<div class="main-nav">
    <div class="left-nav">
        <div class="sidebar-menu">
            <div class="sidebar-element">
                <a href="{{ route('index') }}"><h4><span>01</span> Inicio</h4></a>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('projects') }}"><h4><span>02</span> Proyectos</h4></a>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('about.us') }}"><h4><span>03</span> Acerca de</h4></a>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('contact') }}"><h4><span>04</span> Contacto</h4></a>
            </div>
        </div>

        <h2>Proyectos Grupo HR</h2>
    </div>

    <div class="right-nav">
        <a href="javascript:void(0)" class="close-btn"><ion-icon name="close-outline"></ion-icon></a>

        <div class="d-flex flex-column align-content-around flex-wrap text-center">
            <img class="logo-nav" src="{{ asset('img/logo_white.svg') }}" alt="">

            <div class="mt-auto mb-auto">
                <p>Granjas Ceres 109, 37289 <br>León de los Aldama, Gto.</p>
                <p><a href="">(477) 555 55 55</a></p>
                <p><a href="">proyectos@grupohr.com</a></p>
    
            </div>
            
            <p class="mt-auto">Grupo HR © {{ Carbon\Carbon::now()->format('Y') }}</p>
        </div>
    </div>
</div>