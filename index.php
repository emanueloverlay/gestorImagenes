<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de imagenes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Subir Imagen</h2>
    <form action="app/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <input type="submit" value="Subir Imagen">
    </form>

    <h2>Galería</h2>
    <div class="gallery">
        <?php
        $directory = 'storage/uploads/';
        $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        if(count($images) > 0){
            foreach($images as $image){
                echo "<img src='$image' alt='' />";
            }
        } else {
            echo "<p>No hay imágenes disponibles.</p>";
        }
        ?>
    </div>
</body>
</html>
