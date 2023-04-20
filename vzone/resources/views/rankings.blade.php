<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Rankings - Virtual Zone</title>
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-main navbar-expand-lg navbar-light nav-bar">
            <div class="container-fluid">

                <a class="navbar-brand" href="https://virtualzone.es">
                    <img src="img-vz/virtualzone-logo-black.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="<?= route ('experiences')
                                ?>">Experiencias VR</a>
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
                            <a class="nav-link" href="#">Rankings</a>
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

                    <span class="emoti-phone"><img src="icons/phone.png" class="img-fluid rounded"
                            alt="Phone icon"></span>
                    <p>622 58 49 76</p>
                    <button class="btn btn-danger rounded-5"><a href="book/book.html"
                            class="text-decoration-none text-white">Reservar</a></button>

                </div>
            </div>
        </nav>

        <header class="header">
            <p>Selecciona tu centro Virtual Zone</p>

            <button>Madrid</button>
            <button>Alicante</button>
            <button>Valencia</button>
        </header>

        <div class="dark-container-fluid text-white info-container">
            <select class="form-select" aria-label="Default select example">
                <option selected>Invasion</option>
            </select>

            <select class="form-select" aria-label="Default select example">
                <option selected>Global</option>
            </select>
        </div>

        <div class="dark-container-fluid pt-5 pt-lg-0 text-white info-container">

            <section class="container-fluid teams-section">
                <h2>Top 10 Equipos</h2>

                <!-- Content -->
                <div class="element">
                    <?php
                        $json = file_get_contents(public_path('data/teams.json'));
                        $data = json_decode($json, true);

                    ?>

                    @foreach($data as $item)

                        {{ $item->id }}
                        {{ $item->team_name }}
                        {{ $item->score }}
                        {{ $item->city }}
                    @endforeach
                </div>

            </section>
        </div>

        <div class="light-container-fluid pt-5 pt-lg-0 text-white info-container">
            <section class="container-fluid players-section">
                <h2>Top 10 Jugadores</h2>

                <!-- Content -->
                <div class="element">1</div>
                <div class="element">2</div>
                <div class="element">3</div>
                <div class="element">4</div>
                <div class="element">5</div>
                <div class="element">6</div>
                <div class="element">7</div>
                <div class="element">8</div>
                <div class="element">9</div>
                <div class="element">10</div>
            </section>
        </div>

        <footer class="container-fluid pt-5 pb-4 footer text-white">
            <div class="col-12 text-left">
                <img src="img-vz/virtualzone-logo-white.png" alt="Logo White">
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
                <span class="fcbk-logo"><img src="icons/facebook.png" class="img-fluid" alt="Facebook"></span>
                <span>Facebook</span>

                <span class="twt-logo"><img src="icons/twitter.png" class="img-fluid" alt="Twitter"></span>
                <span>Twitter</span>

                <span class="yt-logo"><img src="icons/youtube.png" class="img-fluid" alt="Youtube"></span>
                <span>Youtube</span>

                <span class="ig-logo"><img src="icons/instagram.png" class="img-fluid" alt="Instagram"></span>
                <span>Instagram</span>
            </div>

            <span class="col-12 text-left">&copy; 2023 virtualzone
            </span>
        </footer>
    </div>
</body>

</html>
