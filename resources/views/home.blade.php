

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Logo</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my-profile">Mi perfil</a>
                    </li>

                    @if($admin)
                    <li class="nav-item">
                        <a class="nav-link" href="admin">Admin</a>
                    </li>
                    @endif
                </ul>
            </div>
            @auth
                <a class="btn btn-danger" href="{{ route('logout')}}">Logout</a>
            @endauth

            @guest
                <a class="btn btn-primary" href="login">login</a>
            @endguest

        </nav>
    </header>

    <!--Main layout-->
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center text-md-start">
                <!-- Post -->
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="{{asset('img/orn.jpg')}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 mb-4 text-left">
                        <h5>Very long post title</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                            necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                            ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                        </p>

                        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Read</button>
                    </div>
                </div>
                <!-- Post -->
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="{{asset('img/orn.jpg')}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 mb-4 text-left">
                        <h5>Very long post title</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                            necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                            ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                        </p>

                        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Read</button>
                    </div>
                </div>
                <!-- Post -->
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="{{asset('img/orn.jpg')}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 mb-4 text-left">
                        <h5>Very long post title</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                            necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                            ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                        </p>

                        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Read</button>
                    </div>
                </div>
                <!-- Post -->
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="{{asset('img/orn.jpg')}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 mb-4 text-left">
                        <h5>Very long post title</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
                            necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
                            ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
                        </p>

                        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Read</button>
                    </div>
                </div>
            </section>
            <!--Section: Content-->
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ©2024 Copyright:
            <a class="text-dark" href="https://github.com/OmarJr11/proyecto_databox/">github.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>