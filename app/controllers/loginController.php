<?php

require_once '../models/Login.php';

if (isset($_GET['function'])) {
    switch ($_GET['function']) {
        case 'login':
            login();
            break;
        case 'logout':
            logout();
            break;
        default:
            echo json_encode(['error' => 'Acción no válida']);
            break;
    }
}
function login()
{
    $usr = $_POST['user'];
    $pass = $_POST['pass'];
    $resultado = (new Login())->loginUsuario($usr, $pass);
    $datos = $resultado->fetch_assoc();

    if ($resultado->num_rows) {
        session_start();
        $_SESSION['usuario'] = $datos['user'];
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}

function logout(){
    session_start();
    session_unset();
    session_destroy();
    echo json_encode(true);
}