<?php

require_once '../models/Images.php';

if (isset($_GET['function'])) {
    switch ($_GET['function']) {
        case 'insert':
            insertImage();
            break;
        case 'getGallery':
            getGallery();
            break;
        default:
            echo json_encode(['error' => 'Acción no válida']);
            break;
    }
}

function insertImage()
{

    // Definición del espacio de guardado
    $directory = "../../storage/uploads/";
    $file = $directory . basename($_FILES["image"]["name"]);

    $uploadOk = true;
    $imageType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    // Verificar si el archivo ya existe
    if (file_exists($file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = false;
    }

    // Restricción de formatos de archivo
    if ($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif") {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = false;
    }

    // Verificar si $uploadOk es false por un error
    if ($uploadOk == false) {
        echo "Lo siento, tu archivo no fue subido.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $file)) {
            if (Images::insertImage(basename($_FILES["image"]["name"]))) {
                header('Location: ../../galeria.php');
            } else {
                echo "Lo siento, hubo un error al insertar la imagen en la base de datos.";
            }
        } else {
            echo "Lo siento, hubo un error subiendo tu archivo.";
        }
    }
}

function getGallery()
{
    $imageModel = new Images();
    $images = $imageModel->getImages();
    echo json_encode($images);
}
