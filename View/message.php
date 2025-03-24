<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "View/Partials/head.php";
require_once "View/Partials/header.php";

echo '<main class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow mt-5">
                    <div class="card-body">';

if (isset($_SESSION['access-denied']) && $_SESSION['access-denied']) { // error de autenticación
  echo '<h3 class="text-center">Error de autenticación</h3>
          <p class="text-center mt-3">El usuario o la contraseña no son correctos</p>
          <div class="d-flex justify-content-center">
            <a href="/login" class="btn btn-success">Inténtalo de nuevo</a>
          </div>';

  $_SESSION['access-denied'] = false;
}

if (isset($_SESSION['logged'])) {

  if (isset($_SESSION['book-borrowed']) && $_SESSION['book-borrowed']) { // mensaje de usuario eliminado correctamente
    echo '<h3 class="text-center mb-4">¡Libro prestado!</h3>
            <div class="d-flex justify-content-center">
              <a href="/" class="btn btn-success">Inicio</a>
            </div>';
  
    $_SESSION['book-borrowed'] = false;

    exit;
  }

  if (isset($_SESSION['edited']) && $_SESSION['edited']) { // si viene de editar el usuario
    echo '<h3 class="text-center mb-4">Usuario editado correctamente</h3>
        <div class="d-flex justify-content-center">
          <a href="/user-menu" class="btn btn-success">Volver al menú de usuario</a>
        </div>';

    $_SESSION['edited'] = false;
  } else {  // mensaje de bienvenida
    echo '<h3 class="text-center">Bienvenido ' . $_SESSION['user-name'] . '</h3>
          <div class="d-flex justify-content-center">
            <a href="/user-menu" class="btn btn-success">Ir al menú de usuario</a>
          </div>';
  }
}

if (isset($_SESSION['registered']) && $_SESSION['registered']) { // mensaje de registro correcto
  echo '<h3 class="text-center mb-4">Usuario registrado correctamente</h3>
          <div class="d-flex justify-content-center">
            <a href="/login" class="btn btn-success">Iniciar sesión</a>
          </div>';

  $_SESSION['registered'] = false;
}

if (isset($_SESSION['deleted']) && $_SESSION['deleted']) { // mensaje de usuario eliminado correctamente
  echo '<h3 class="text-center mb-4">Usuario eliminado correctamente</h3>
        <p class="text-center">¡Te echaremos de menos!</p>
          <div class="d-flex justify-content-center">
            <a href="/register" class="btn btn-success">Registrarse</a>
          </div>';

  $_SESSION['deleted'] = false;
}

echo                    '</div>
                </div>
            </div>
        </div>
    </main>';

require_once "View/Partials/footer.php";
