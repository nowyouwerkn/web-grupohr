<div class="main-nav">
    <div class="left-nav">
        <a href="javascript:void(0)" class="close-btn"><ion-icon name="close-outline"></ion-icon></a>
        
        <div class="sidebar-menu">
            @if(request()->is('/'))

            @else
            <div class="sidebar-element">
                <a href="{{ route('index') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">01</span> Inicio</h4>
                </a>
            </div>
            @endif

            @if(request()->is('proyectos'))

            @else
            <div class="sidebar-element">
                <a href="{{ route('projects') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">02</span> Proyectos</h4>
                </a>
            </div>
            @endif

            @if(request()->is('acerca-de-nosotros'))

            @else 
            <div class="sidebar-element">
                <a href="{{ route('about.us') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">03</span> Nosotros</h4>
                </a>
            </div>
            @endif

            @if(request()->is('contacto'))

            @else 
            <div class="sidebar-element">
                <a href="{{ route('contact') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">04</span> Contacto</h4>
                </a>
            </div>
            @endif
        </div>

        <h2 class="display-1 outline-text">Proyectos</h2>
    </div>

    <div class="right-nav">
        <a href="javascript:void(0)" class="close-btn"><ion-icon name="close-outline"></ion-icon></a>

        <div class="d-flex flex-column align-content-around">
            <img class="logo-nav" src="{{ asset('img/logo_white.svg') }}" alt="">

            <ul class="list-inline social-icons">
                {{--  <li class="list-inline-item"><a target="_blank" href=""><ion-icon name="logo-tiktok"></ion-icon></a></li> --}}
                <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/grupohr.mx"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="list-inline-item"><a target="_blank" href="https://www.youtube.com/channel/UC77T3jFaelEPYJ2LNukcdYA"><ion-icon name="logo-youtube"></ion-icon></a></li>
                <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/grupo.hr/"><ion-icon name="logo-instagram"></ion-icon></a></li>
            </ul>

            <div class="mt-auto mb-auto">
                <p>Granjas Ceres 109, 37289  <br> León de los Aldama, Gto.</p>
                <p><a href="tel:4773908382">(477) 390 83 82</a></p>
                <p><a href="mailto:contacto@grupohr.mx">contacto@grupohr.mx</a></p>
                
                <a href="https://maps.app.goo.gl/6mUaBoPXc4Fnm3UZA" target="_blank" class="btn btn-primary">Encuéntranos en el mapa</a>
            </div>
            
            <p class="mt-auto">Grupo HR © {{ Carbon\Carbon::now()->format('Y') }}</p>
        </div>
    </div>
</div>
