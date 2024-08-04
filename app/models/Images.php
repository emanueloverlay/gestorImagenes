<?php
require_once "../core/Database.php";

class Images
{
    static function insertImage($imageName)
    {
        $db = new Database();
        $connection = $db->connect();

        $stmt = $connection->prepare("INSERT INTO imagenes (imageName) VALUES (?)");
        $stmt->bind_param("s", $imageName);

        if ($stmt->execute()) {
            $stmt->close();
            $connection->close();
            return true;
        } else {
            $stmt->close();
            $connection->close();
            return false;
        }
    }

    function getImages(){
        $db = new Database();
        $connection = $db->connect();

        $sql = "SELECT * FROM imagenes";
        $result = $connection->query($sql);

        $images = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $images[] = $row;
            }
        }

        $connection->close();

        return $images;
    }
}