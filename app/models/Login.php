<?php

require_once "../core/Database.php";

class Login {
    function loginUsuario($usr, $pass){
        $db = new Database();
        $connection = $db->connect();
        $sql = "SELECT * FROM usuarios WHERE user = '$usr' AND password = '$pass'";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
}