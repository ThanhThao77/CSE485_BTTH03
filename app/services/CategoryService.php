<?php
require_once APP_ROOT . "/app/libs/DBConnect.php";
require_once APP_ROOT . '/app/models/Category.php';
class CategoryService
{
    public static function getAllCategories()
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "select * from category order by id desc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $categories = [];
        while ($row = $stmt->fetch()) {
            $category = new Category($row['id'],$row['name'],$row['description'],$row['navigation']);
            $categories[] = $category;
        }
        return $categories;
    }
}