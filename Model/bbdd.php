<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class BBDD {
    private $conection_string = "mysql:dbname=this_is_tfg; host=localhost";
    private $user = "root";
    private $password = "";
    private $errorM = "";

    public $db;

    public function __construct() {
        try {
            $this->db = new PDO($this->conection_string, $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) { // si no consigue realizar la conexión
            $this->errorM .= "Error en la base de datos: " . $e->getMessage();
            echo $this->errorM; // Agrega esta línea para mostrar el mensaje de error
        }
    }
    
    //getUser es una función que devuelve un array asociativo
    public function getUser($email, $password) {
        $myUserArray = [];

        try {
            $sql = "SELECT * FROM `usuario` WHERE email = :email AND password = :password";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                ':email' => $email,
                ':password' => $password
            ]);
    
            $myUserArray = $stmt->fetch(PDO::FETCH_ASSOC);
    
        } catch (PDOException $e) {
            $this->errorM .= "Error con la base de datos: " . $e->getMessage();
        } catch (Exception $e) {
            $this->errorM .= "Error genérico: " . $e->getMessage();
        }

        if (empty($myUserArray)) {
            return false;
        } else return $myUserArray;
    }
    
    //addUser es una función booleana
    public function addUser($email, $nombre, $apellidos, $password, $id = null) {
        $sql = "INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES (:id, :nombre, :apellidos, :email, :password)";
        $stmt = $this->db->prepare($sql);

        if ($stmt->execute([
            ':email' => $email,
            ':nombre' => $nombre,
            ':apellidos' => $apellidos,
            ':password' => $password,
            ':id' => $id
        ])) {
            return true;
        } else return false;
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM `usuario` WHERE `id` = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':id' => $id
        ]);
    }

    /*public function editUser($oldEmail, $newEmail, $nombre, $apellidos, $password) {
        $sql = "UPDATE `usuarios` SET `password` = :password, `email` = :newEmail, `name` = :nombre, `lastname` = :apellidos WHERE `email` = :oldEmail";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':newEmail' => $newEmail,
            ':nombre' => $nombre,
            ':apellidos' => $apellidos,
            ':password' => $password,
            ':oldEmail' => $oldEmail
        ]);
    }*/

    //getBooks es una función que devuelve un array de arrays asociativos
    public function getBooks() {
        $sql = "SELECT * FROM `libro`";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }

    public function modifyBooks($id, $newStock) {
        $sql = "UPDATE `libro` SET `stock` = :stock WHERE `id` = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':stock' => $newStock,
            ':id' => $id
        ]);
    }

    public function getErrorM() {
        return $this->errorM;
    }
}