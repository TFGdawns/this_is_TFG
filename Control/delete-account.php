<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "Model/bbdd.php";

$db = new BBDD();

if ($_SESSION['loan'])
$db->deleteUser($_SESSION['user-id']);
session_unset();

$_SESSION['deleted'] = true;

header("Location: /message");
