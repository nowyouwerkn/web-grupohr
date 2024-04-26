<div class="pre-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h5>Ponte en contacto con nosotros</h5>
                    <hr>
                </div>
            </div>

            <div class="col-md-6">
                mapa
            </div>

            <div class="col-md-6">
                <h6 class="body-large bold text-uppercase">Correo de Contacto</h6>
                <p><a href="">proyecto@grupohr.com</a></p>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="body-large bold text-uppercase">Showroom León</h6>
                        <p>Granjas Ceres 109, 37289 León de los Aldama, Gto.</p>
                        <p><a href="">477 555 55 55</a></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="body-large bold text-uppercase">Showroom San Miguel de Allende</h6>
                        <p>Granjas Ceres 109, 37289 León de los Aldama, Gto.</p>
                        <p><a href="">477 555 55 55</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="col-md-4">
                <a href="{{ route('index') }}"><img class="footer-logo" src="{{ asset('img/logo_black.svg') }}" alt=""></a>
            </div>
            <div class="col-md-4 text-center">
                <p class="p mb-0 copyright-text">Grupo HR© {{ Carbon\Carbon::now()->format('Y') }}. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-icons">
                    <li class="list-inline-item"><a href=""><ion-icon name="logo-tiktok"></ion-icon></a></li>
                    <li class="list-inline-item"><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li class="list-inline-item"><a href=""><ion-icon name="logo-youtube"></ion-icon></a></li>
                    <li class="list-inline-item"><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>