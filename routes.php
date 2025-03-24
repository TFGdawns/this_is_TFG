<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// index.php

$method = $_SERVER["REQUEST_METHOD"];

// Obtener la URL solicitada
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($method) {
    case 'GET':

        switch ($request) {
            case '/':
                require_once 'View/landing.php';
                break;

            case '/login':
                require 'View/login.php';
                break;

            case '/register':
                require 'View/register.php';
                break;

            case '/message':
                require 'View/message.php';
                break;

            case '/user-menu':
                require 'View/user-menu.php';
                break;

            case '/view-profile':
                require 'View/profile.php';
                break;

            case '/delete-account':
                require 'Control/delete-account.php';
                break;

            case '/book':
                require 'View/book.php';
                break;

            case '/process-loan':
                require 'Control/process-loan.php';
                break;

            case '/logout':
                session_start();
                session_unset();
                session_destroy();
                header("Location: /");
                break;

            case '/forbidden-access':
                require 'View/forbidden-access.php';
                break;

            default:
                http_response_code(404);
                //require 'View/home.php';
                echo "error";
                break;
        }

        break;

    case 'POST':
        switch ($request) {
            case '/process-forms':
                require_once 'Control/process-forms.php';
                break;
                
            default:
                http_response_code(404);
                require 'view/home.php';
                break;
        }

    default:
        echo "Error, método no permitido";
        break;
}
