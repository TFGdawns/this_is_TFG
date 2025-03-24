<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "View/Partials/head.php";
require_once "View/Partials/header.php";

if ($_SESSION['logged']) {
    echo '<main class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow mt-5">
                <div class="card-body">
                    <h4>Nombre: <span style="font-weight:lighter">' . $_SESSION['user-name'] . '</span></h4>
                    <h4>Apellidos: <span style="font-weight:lighter">' . $_SESSION['user-lastname'] . '</span></h4>
                    <h4>E-mail: <span style="font-weight:lighter">' . $_SESSION['user-email'] . '</span></h4>
                    <h4>Libros alquilados: <span style="font-weight:lighter">' . count($_SESSION['user-loan']) . '</span></h4>
                </div>
            </div>
        </div>
    </div>
</main>';
} else header("Location: /forbidden-access");

require_once "View/Partials/footer.php";
