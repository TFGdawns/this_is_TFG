<body>

    <!-- Header Fijo con Bootstrap -->
    <header class="bg-dark text-white py-3 shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3 m-0"><a href="/">La Biblioteqa</a></h1>
            <nav>
                <a href="/" class="text-white me-3">Catálogo</a>
                <a href="#" class="text-white me-3">Sobre Nosotros</a>
                <a href="#" class="text-white me-3">Contacto</a>
                <?php

                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);

                session_start();
                if (isset($_SESSION['logged'])) { // si la sesión está iniciada
                    echo '<a href="/user-menu" class="btn btn-secondary me-3">Menu de usuario</a>';
                    echo '<a href="/logout" class="btn btn-danger">Cerrar sesión</a>';
                } else {
                    echo '<a href="/login" class="btn btn-success">Iniciar sesión / Registrarse</a>';
                }
                ?>
            </nav>
        </div>
    </header>