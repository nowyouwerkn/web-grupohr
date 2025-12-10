<div id="contact" class="pre-footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="section-title">
                    <h5 class="body-large">Ponte en contacto con nosotros</h5>
                    <hr>
                </div>
            </div>

            <div class="col-md-6">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.9631545444745!2d-101.63757042385353!3d21.114035080556707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bb9283236550d%3A0xea500afb1993db5d!2sGRUPO%20HR%20-%20Canceler%C3%ADa%20de%20PVC%2C%20Canceler%C3%ADa%20de%20Aluminio%2C%20Templados%20y%20Cortinas.!5e0!3m2!1ses-419!2smx!4v1714331644986!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="map-btn-wrap">
                        <a href="https://maps.app.goo.gl/6mUaBoPXc4Fnm3UZA" target="_blank" class="btn-map"><ion-icon name="arrow-forward-outline"></ion-icon> Abrir en Maps</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 offset-md-1">
                <h6 class="body-large bold text-uppercase">Correo de Contacto</h6>
                <p class="h5 text-uppercase"><a href="mailto:contacto@grupohr.mx">contacto@grupohr.mx</a></p>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="body-large bold text-uppercase">LEÓN, GTO.</h6>
                        <p>Zorra 109 Granjas Ceres, 37289 <br> León, Gto. México.</p>
                        <p class="mb-0"><a href="tel:4773908382"><ion-icon name="phone-portrait-outline"></ion-icon> (477) 390 83 82</a></p>
                        <p><a href="https://api.whatsapp.com/send?phone=+524775579885&text=¡Buen día, tengo preguntas de su servicio!" target="_blank"><ion-icon name="logo-whatsapp" class="whatsapp-green"></ion-icon> (477) 557 98 85</a></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="body-large bold text-uppercase">SAN MIGUEL DE ALLENDE</h6>
                        <p>Showroom - Camino Alcocer s/n Fracc. Jardines de Allende <br> SMA, Gto. México.</p>
                        <p><a href="https://api.whatsapp.com/send?phone=+524151032024&text=¡Buen día, tengo preguntas de su servicio!" target="_blank"><ion-icon name="logo-whatsapp" class="whatsapp-green"></ion-icon> (415) 103 20 24</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="mt-4">
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="col-md-4">
                <a href="{{ route('index') }}"><img class="footer-logo" src="{{ asset('img/logo_black.svg') }}" alt=""></a>
            </div>
            
            <div class="col-md-4 text-center">
                <p class="p mb-3 copyright-text">Grupo HR © {{ Carbon\Carbon::now()->format('Y') }}. Todos los derechos reservados.</p>
                <p class="mb-0 d-flex justify-content-center align-items-center gap-2"><a href="{{ asset('aviso-de-privacidad.pdf') }}" target="_blank"><ion-icon name="document-outline"> </ion-icon> <span>Aviso de Privacidad</span></a></p>
            </div>

            <div class="col-md-4">
                <ul class="list-inline social-icons">
                    <li class="list-inline-item"><a target="_blank" href="https://www.tiktok.com/@grupo.hrleon"><ion-icon name="logo-tiktok"></ion-icon></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/grupohr.mx"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.youtube.com/channel/UC77T3jFaelEPYJ2LNukcdYA"><ion-icon name="logo-youtube"></ion-icon></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/grupo.hr/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
