<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=2.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Groups - Virtual Zone</title>
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg bg-light nav-bar">
            <div class="container-fluid">

                <a class="navbar-brand" href="https://virtualzone.es">
                    <img src="../img-vz/virtualzone-logo-black.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="<?= route ('experiences') ?>">Experiencias VR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= route ('groups') ?>">Grupos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= route ('prices') ?>">Precios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= route ('gift-card') ?>">Tarjeta Regalo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= route ('contact') ?>">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route ('rankings') ?>">Rankings</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Alicante
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Madrid</a></li>
                                <li><a class="dropdown-item" href="#">Valencia</a></li>
                            </ul>
                        </li>
                    </ul>

                    <span class="emoti-phone"><img src="../icons/phone.png" class="img-fluid rounded"
                            alt="Phone icon"></span>
                    <p>622 58 49 76</p>
                    <button class="btn btn-danger rounded-5">Reservar</button>

                </div>
            </div>
        </nav>

        <div class="light-container-fluid pt-5 pt-lg-0 text-white info-container">

            <main class="container-fluid bg-light text-black">
                <div class="row">
                    <div class="col-12 col-xl-8 offset-xl-2 mb-3">
                        <img src="../img-vz/img-groups.jpg" class="img-fluid image-shadow rounded" alt="Img groups">
                    </div>

                    <div class="col-12 col-xl-8 offset-xl-2 mt-4 content">
                        <h3>Empresas, despedidas y cumpleaños</h3>

                        <p>En Virtual Zone organizamos sesiones especiales para grupos grandes. Podemos atender hasta 16
                            personas por hora en nuestras instalaciones de Madrid y hasta 8 por hora en Alicante.</p>

                        <p>Si queréis celebrar un cumpleaños, una despedida de solter@ o una actividad perfecta para
                            vosotros.</p>

                        <p>Podréis disfrutar de experiencias en entornos virtuales inimaginables, reíros a carcajadas y
                            salir de nuestras instalaciones con un buen subidón de adrenalina antes de una comida,
                            celebración o simplemente una tarde con amigos.</p>

                        <p class="font-weight-bold">Para una atención personalizada y adaptada a vuestro grupo <a
                                href="tel: +34 622 58 49 76" class="text-decoration-none">llámanos</a> o <a
                                href="../groups/grupos.html" class="text-decoration-none">escríbenos
                            </a> por whatsapp al <a href="tel: +34 622 58 49 76" class="text-decoration-none">+34 622 58
                                49 76</a> y te atenderemos con mucho gusto.
                        </p>
                    </div>
                </div>
            </main>

        </div>

        <footer class="pt-5 pb-4 footer text-white">
            <div class="col-12 text-left">
                <img src="../img-vz/virtualzone-logo-white.png" alt="Logo White">
            </div>

            <div class="col-12 lista-1">
                <ul>
                    <li>Ayuda</li>
                    <li>Trabajo</li>
                    <li>Franquicias</li>
                    <li>VR a domicilio</li>
                    <li>Desarrollos B2B</li>
                </ul>
            </div>

            <div class="col-12 lista-2">
                <ul>
                    <li>Fondos FEDER</li>
                    <li>Fondos Red ES</li>
                    <li>Aviso legal y normas</li>
                    <li>Política de privacidad</li>
                    <li>Cookies</li>
                    <li>Prensa</li>
                </ul>
            </div>

            <div class="col-12 socialmedia-logos">
                <span class="fcbk-logo"><img src="../icons/facebook.png" class="img-fluid" alt="Facebook"></span>
                <span>Facebook</span>

                <span class="twt-logo"><img src="../icons/twitter.png" class="img-fluid" alt="Twitter"></span>
                <span>Twitter</span>

                <span class="yt-logo"><img src="../icons/youtube.png" class="img-fluid" alt="Youtube"></span>
                <span>Youtube</span>

                <span class="ig-logo"><img src="../icons/instagram.png" class="img-fluid" alt="Instagram"></span>
                <span>Instagram</span>
            </div>

            <span class="col-12 text-left">&copy; 2023 virtualzone
            </span>
        </footer>
    </div>
</body>

</html>
