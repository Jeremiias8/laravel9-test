<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=2.0" />
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Contacto - Virtual Zone</title>
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

            <div class="map">

            </div>

            <main class="contact flex-fill pb-5">
                <div class="col-12 col-xl-5 mb-5 mb-xl-0">

                    <div class="accordion accordion-container center-vertically">
                        <div class="card">
                            <div class="card-header">
                              Virtual Zone Alicante
                            </div>
                            <div class="card-body">
                              <a href="#" class="btn btn-dark">Ir</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Contacto</h5>
                              <p class="card-text collapse show">
                                Plaza de Carlos Trías Bertrán, 3, Planta 1, 28020, Madrid

                                622 58 49 76
                                info@virtualzone.es

                                (Ubicado en AZCA, Metro Santiago Bernabéu, Línea 10)

                                Horario
                                Domingo - 10:00 a 15:00 - 16:00 a 21:00
                                Lunes - Cerrado
                                Martes a jueves - 17:00 a 22:00
                                Viernes y sábado - 10:00 a 15:00 - 16:00 a 23:00</p>
                            </div>
                              <div class="card-header">
                                Virtual Zone Madrid
                              </div>
                              <a href="#" class="btn btn-dark">Ir</a>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                Virtual Zone Valencia
                              </div>
                              <a href="#" class="btn btn-dark">Ir</a>
                        </div>

                    </div>

                </div>

                <div class="col-12 col-xl-7">
                    <h2>¿Alguna duda?</h2>
                    <p>¡Ponte en contacto con nosotros!</p>

                    <form class="row g-3 needs-validation" method="post">
                        <div class="col-md-4">

                          <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                          <div class="valid-feedback">
                            El nombre no puede estar vacío
                          </div>
                        </div>
                        <div class="col-md-4">

                          <input type="number" class="form-control" id="validationCustom02" value="Otto" required>
                          <div class="valid-feedback">
                            El teléfono no puede estar vacío
                          </div>
                        </div>
                        <div class="col-md-4">

                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                              El email no puede estar vacío
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">

                          <textarea class="form-control" required></textarea>
                          <div class="invalid-feedback">
                            El mensaje no puede estar vacío
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom04" class="form-label">State</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom05" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="validationCustom05" required>
                          <div class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-check">

                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              He leído y acepto la Política de privacidad
                            </label>
                            <div class="invalid-feedback">
                                Debes aceptar la Política de privacidad
                            </div>

                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              He leído y acepto las Condiciones legales y normas de funcionamiento
                            </label>
                            <div class="invalid-feedback">
                              Debes aceptar la Política de privacidad y las Condiciones legales y normas de funcionamiento
                            </div>

                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-dark" type="submit">Enviar</button>
                        </div>
                      </form>
                </div>
            </main>
        </div>
    </body>
</html>
