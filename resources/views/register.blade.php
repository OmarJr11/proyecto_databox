<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="width: 100%; min-height: 100vh;">
    <!-- Section: Design Block -->
    <section style="width: 100%; min-height: 100vh;">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="height: 100vh; background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        El mejor lugar <br />
                        <span class="text-primary">para tu campeon</span>
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                        Aqui encontraras muchas cosas que te ayudaran a mejorar.
                        Desde tus mecanicas y entendimiento del juego, hasta la
                        historia del campeon que mas te gusta.
                        Te invitamos a unirte.
                    </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <!-- Username input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="name">Nombre</label>
                                    <input type="text" id="name" name="name" class="form-control" />
                                </div>

                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" id="email" name="email" class="form-control" />
                                </div>

                                <!-- Password input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input class="form-check-input" type="checkbox" id="admin" name="admin" />
                                    <label class="form-check-label" for="admin"> ¿Eres un admin? </label>
                                </div>

                                <!-- Submit button -->
                                <div class="d-flex justify-content-center">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" style="width: 150px;">
                                        Registrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->  
    </section>
    <!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
