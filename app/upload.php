<?php
// Definición del espacio de guardado
$directory = "../storage/uploads/";
$file = $directory . basename($_FILES["image"]["name"]);

$uploadOk = true;
$imageType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

// Verificar si el archivo ya existe
if (file_exists($file)) {
    echo "Lo siento, el archivo ya existe.";
    $uploadOk = false;
}

// Restricción de formatos de archivo
if($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif" ) {
    echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
    $uploadOk = false;
}

// Verificar si $uploadOk es false por un error
if ($uploadOk == false) {
    echo "Lo siento, tu archivo no fue subido.";
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $file)) {
        header('Location: ../index.php');
    } else {
        echo "Lo siento, hubo un error subiendo tu archivo.";
    }
}