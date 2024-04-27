

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="width: 100%; min-height: 100vh;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Logo</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my-profile">Mi perfil</a>
                    </li>
                    @if($admin)
                    <li class="nav-item active">
                        <a class="nav-link" href="admin">Admin</a>
                    </li>
                    @endif
                </ul>
            </div>
            @auth
                <a class="btn btn-danger"href="{{ route('logout')}}">Logout</a>
            @endauth
        </nav>
    </header>

    <!--Main layout-->
    <main class="my-5" style="width: 100%; min-height: 70vh;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center text-md-start">
                <div class="col-md-8 mb-4 text-left">
                    <h5> Usuario Administrador: {{$user->name}} ID: #{{$user->id}}</h5>
                </div>
                <!-- Post -->
                @if(count($users) > 0)
                    <ul class="list-group">
                        @foreach ($users as $u)
                            <li class="list-group-item d-flex justify-content-around align-items-center">
                                <div class="row w-100 d-flex align-items-center justify-content-around">
                                    <div class="d-flex align-items-center" style="width: auto; margin-right: 30px;">
                                        ID: #{{$u->id}}
                                    </div>
                                    <div class="d-flex align-items-center" style="width: auto; margin-right: 30px;">
                                        Nombre: {{$u->name}}
                                    </div>
                                    <div class="d-flex align-items-center" style="width: auto;">
                                        Role: '{{$u->role}}'
                                    </div>

                                    <div class="d-flex align-items-center" style="width: auto;">
                                        <form method="POST" action="{{ route('changeRol', $u) }}">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-primary btn-lg">Cambiar Rol</button>
                                        </form>
                                    </div>

                                    <div class="d-flex align-items-center" style="width: auto;">
                                        <form method="POST" action="{{ route('delete', $u) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h1>No hay usuarios</h1>
                @endif
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