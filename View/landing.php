<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "Model/bbdd.php";

require_once "View/Partials/head.php";
require_once "View/Partials/header.php";

$db = new BBDD();
$_SESSION['books'] = $db->getBooks();

echo '<main class="container flex-grow-1">
        <h2 class="text-center my-4">Catálogo</h2>
        <div class="row">';

foreach ($_SESSION['books'] as $book) {
    echo '<div class="col-md-3 mb-4 text-center">
                <div class="card book-card shadow">
                    <div class="card-body">
                        <img src="' . $book['img'] . '" alt="' . $book['titulo'] . '" class="book-img">
                        <div class="fs-5 mt-3 fw-bold">' . $book['titulo'] . '</div>
                        <div class="text-muted">' . $book['autor'] . '</div>
                        <div class="mt-2 small">' . $book['sinopsis'] . '</div>
                        <div class="mt-2">Cantidad disponible: ' . $book['stock'] . '</div>
                        <a href="/book?id=' . $book['id'] . '" class="btn btn-primary">Ver libro</a>
                    </div>
                </div>
            </div>';
}

echo '</div>
    </main>';

require_once "View/Partials/footer.php";
