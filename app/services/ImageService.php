<?php
require_once APP_ROOT . "/app/libs/DBConnect.php";
require_once APP_ROOT . '/app/models/Image.php';
class ImageService
{
    public static function getAllImages()
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "select * from image order by id desc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $images = [];
        while ($row = $stmt->fetch()) {
            $image = new Image($row['id'],$row['file'],$row['alt']);
            $images[] = $image;
        }
        return $images;
    }
}