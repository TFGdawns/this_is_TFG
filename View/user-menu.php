<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "View/Partials/head.php";
require_once "View/Partials/header.php";

if ($_SESSION['logged']){
    echo '<main class="container flex-grow-1">
    <h2 class="text-center my-4">Menú de Usuario</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="list-group shadow">
                <a href="/view-profile" class="list-group-item list-group-item-action">👤 Ver mis datos</a>
                <a href="/delete-account" class="list-group-item list-group-item-action text-danger">🗑️ Eliminar mi cuenta</a>
            </div>
        </div>
    </div>
</main>';
} else header("Location: /forbidden-access");

require_once "View/Partials/footer.php";
