<header class="bg-image-none h-auto">

    <nav class="navbar border-bottom navbar-expand-lg navbar-light">
        <a href="panel.php" class="navbar-brand">
            <img src="img/core-img/logo-solo.png" alt="" width="40">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route("habitaciones.index") }}">Habitaciones</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="">Usuarios</a>
                </li>
            </ul>

            <ul class="navbar-nav mr-0">

                <li class="nav-item dropleft">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuario
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="panel.php?seccion=perfil">Perfil</a>
                        <a class="dropdown-item" href="">Logout</a>
                    </div>
                </li>
            </ul>


        </div>
        <!-- /.navbar-collapse -->
    </nav>
</header>