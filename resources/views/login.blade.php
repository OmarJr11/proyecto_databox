<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-primary text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <form class="pb-2" method="POST" action="{{route('login')}}">
                                    @csrf
                                    <h2 class="fw-bold mb-3 text-uppercase">Login</h2>

                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name='email' class="form-control form-control-lg" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name='password' class="form-control form-control-lg" />
                                    </div>

                                    <p class="small mb-5"><a class="text-white-50" href="#!">¿Olvidaste la contraseña?</a></p>

                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                </form>

                                <div>
                                    <p class="mb-0">¿No tienes una cuenta? <a href="register" class="text-white-50 fw-bold">Registrarme</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>