<?php
require_once APP_ROOT . '/app/libs/DBConnect.php';
require_once APP_ROOT . '/app/models/Article.php';

class ArticleService
{
    public static function getAllArticle()
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "select * from article order by id desc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $articles = [];
        while ($row = $stmt->fetch()) {
            $article = new Article($row['id'], $row['title'], $row['summary'], $row['content'], $row['created'],
                $row['category_id'], $row['member_id'], $row['image_id'], $row['published']);
            $articles[] = $article;
        }
        return $articles;
    }

    public static function createArticle($title,$summary,$content,$category_id,$member_id,$image_id,$published)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $date = date('Y-m-d H:i:s');
        $sql = "insert into article (title,summary,content,created,category_id,member_id,image_id,published) values (?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$title,$summary,$content,$date,$category_id,$member_id,$image_id,$published]);
    }

    public static function deleteArticle($id)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "delete from article where id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }
}