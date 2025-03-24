<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once "../Model/bbdd.php";

$db = new BBDD();

if (empty($_POST['email-user'])) { // vienes de registro
    $addUser = $db->addUser($_POST['email'], $_POST['name'], $_POST['lastname'], $_POST['password']);
    $_SESSION['registered'] = true;

} else { // vienes de login
    $user = $db->getUser($_POST['email-user'], $_POST['password-user']);

    if (!$user) { // si accede y no encuentra el usuario
        $_SESSION['access-denied'] = true;
    } else { // si sí encuentra al usuario
        $_SESSION['logged'] = true;
        $_SESSION['user-id'] = $user['id'];
        $_SESSION['user-email'] = $user['email'];
        $_SESSION['user-name'] = $user['nombre'];
        $_SESSION['user-lastname'] = $user['apellido'];
        $_SESSION['user-loan'] = [];
    }
}

header("Location: ../message");