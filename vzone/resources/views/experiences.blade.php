<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=2.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Experiences</title>
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

        <div class="light-container-fluid pt-5 pt-lg-0 text-white bg-white info-container">

            <main>
                <div class="row my-5">
                    <h2 class="mt-6 mb-0 p-2 text-black">Experiencias VR</h2>

                    <div class="card m-2" style="width: 18rem;">
                        <img src="../img-vz/foto1-juegos.jpg" class="card-img-top" alt="Invasion Alicante">
                        <div class="card-body">
                            <h5 class="card-title">Invasion Alicante</h5>
                            <a href="#" class="btn btn-primary">Action</a>
                            <p class="card-text text-black">2 a 9 jugadores</p>
                            <p class="card-text text-black">45 minutos</p>
                        </div>
                    </div>

                    <div class="card m-2" style="width: 18rem;">
                        <img src="../img-vz/foto2-juegos.jpg" class="card-img-top" alt="Dead Mansion">
                        <div class="card-body">
                            <h5 class="card-title">Dead Mansion</h5>
                            <a href="#" class="btn btn-primary">Action</a>
                            <a href="#" class="btn btn-primary">Escape Room</a>
                            <p class="card-text text-black">3 a 6 jugadores</p>
                            <p class="card-text text-black">50 minutos</p>
                        </div>
                    </div>

                    <div class="card m-2" style="width: 18rem;">
                        <img src="../img-vz/foto3-juegos.png" class="card-img-top" alt="Virtual Zone Arena">
                        <div class="card-body">
                            <h5 class="card-title">Virtual Zone Arena</h5>
                            <a href="#" class="btn btn-primary">Action</a>
                            <a href="#" class="btn btn-primary">PVP</a>
                            <p class="card-text text-black">4 a 8 jugadores</p>
                            <p class="card-text text-black">45 minutos</p>
                        </div>
                    </div>
                </div>
            </main>

        </div>

        <footer class="container-fluid pt-5 pb-4 mt-auto pt-md-4 pd-md-3 footer text-white">
            <div class="col-12 text-left">
                <img src="../img-vz/virtualzone-logo-white.png" class="img-fluid" alt="Logo White">
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
