<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Biblioteqa</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Header Fijo */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        header a {
            text-decoration: none;
        }

        main {
            margin-top: 70px;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Estilos para imágenes uniformes */
        .book-img {
            width: 100%;
            height: 300px; /* Tamaño fijo para uniformidad */
            object-fit: cover; /* Hace que todas las imágenes mantengan proporción */
            border-radius: 8px;
        }

        /* Estilos para las tarjetas de los libros */
        .book-card {
            border-radius: 10px;
            transition: opacity 0.3s ease;
        }

        .book-card .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Espaciado entre los botones */
        .book-card .btn {
            width: 100%;
            margin-top: 5px;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>