<div class="main-nav">
    <div class="left-nav">
        <div class="sidebar-menu">
            <div class="sidebar-element">
                <a href="{{ route('index') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">01</span> Inicio</h4>
                </a>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('projects') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">02</span> Proyectos</h4>
                </a>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('about.us') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">03</span> Acerca de</h4>
                </a>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('contact') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">04</span> Contacto</h4>
                </a>
            </div>
        </div>

        <h2 class="display-1 outline-text">Proyectos</h2>
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