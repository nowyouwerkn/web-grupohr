<div class="main-nav">
    <div class="left-nav">
        <a href="javascript:void(0)" class="close-btn"><ion-icon name="close-outline"></ion-icon></a>
        
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
                    <h4 class="h3"><span class="body-large bold">03</span> Nosotros</h4>
                </a>
            </div>
           
            {{-- 
            <div class="sidebar-element">
                <a href="{{ route('contact') }}">
                    <div class="hover-block"></div>
                    <h4 class="h3"><span class="body-large bold">04</span> Contacto</h4>
                </a>
            </div>
            --}}
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
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="body-large bold text-uppercase">LEÓN, GTO.</h6>
                        <p>Granjas Ceres 109, 37289. León, Gto. México.</p>
                        <p class="mb-0"><a href="tel:4773908382"><ion-icon name="phone-portrait-outline"></ion-icon> (477) 390 83 82</a></p>
                        <p><a href="https://api.whatsapp.com/send?phone=+524775579885&text=¡Buen día, tengo preguntas de su servicio!" target="_blank"><ion-icon name="logo-whatsapp" class="whatsapp-green"></ion-icon> (477) 557 98 85</a></p>
                    </div>
                    <div class="col-md-12">
                        <h6 class="body-large bold text-uppercase">SHOWROOM - San Miguel de Allende</h6>
                        <p>Camino Alcocer s/n Jardines de Allende. San Miguel de Allende, Gto. México.</p>
                        <p><a href="https://api.whatsapp.com/send?phone=+524151032024&text=¡Buen día, tengo preguntas de su servicio!" target="_blank"><ion-icon name="logo-whatsapp" class="whatsapp-green"></ion-icon> (415) 103 20 24</a></p>
                    </div>
                </div>

                <a href="https://maps.app.goo.gl/6mUaBoPXc4Fnm3UZA" target="_blank" class="btn btn-primary">Encuéntranos en el mapa</a>
            </div>
        </div>
    </div>
</div>
