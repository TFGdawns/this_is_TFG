<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once "Model/bbdd.php";

$db = new BBDD();

$indexOfArray = $_GET['id'] - 1;
$book = $_SESSION['books'][$indexOfArray];

$db->modifyBooks($book['id'], $book['stock'] - 1);

array_push($_SESSION['user-loan'], $book['titulo']);
$_SESSION['book-borrowed'] = true;

header("Location: /message");