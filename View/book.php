<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "View/Partials/head.php";
require_once "View/Partials/header.php";

$book = $_SESSION['books'][$_GET['id'] - 1];

echo '<main class="container py-5">
    <div class="row">
        <div class="col-md-4">
            <img src="' . $book['img'] . '" alt="Imagen del libro" class="book-img w-70" style="object-fit: contain; height: 100%;">
        </div>

        <div class="col-md-8">
            <div class="card book-card shadow-lg">
                <div class="p-4">
                    <h3 class="card-title">' . $book['titulo'] . '</h3>
                    <h5 class="card-subtitle mb-3 text-muted">Autor: ' . $book['autor'] . '</h5>
                    <p class="card-text">Descripción del libro: ' . $book['sinopsis'] . '</p>
                    <p class="card-text"><strong>Cantidad disponible:</strong> ' . $book['stock'] . '</p>';
if ($book['stock'] > 0 && isset($_SESSION['logged']) && $_SESSION['logged']) {
    echo            '<a href="/process-loan?id=' . $book['id'] . '" class="btn btn-primary">Tomar prestado</a>';
}
echo                '</div>
            </div>
        </div>
    </div>
</main>
';

require_once "View/Partials/footer.php";
