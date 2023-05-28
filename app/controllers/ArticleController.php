<?php
require_once APP_ROOT."/app/services/ArticleService.php";
require_once APP_ROOT."/app/services/CategoryService.php";
require_once APP_ROOT."/app/services/ImageService.php";
require_once APP_ROOT."/app/services/MemberService.php";
class ArticleController{
    public function index()
    {
        echo "index cua article";
    }

    public function create()
    {
        $categories=CategoryService::getAllCategories();
        $images=ImageService::getAllImages();
        $members=MemberService::getAllMembers();
        include APP_ROOT . "/app/views/article/create.php";
    }

    public function doCreate()
    {
        ArticleService::createArticle($_POST['title'], $_POST['summary'], $_POST['content'], $_POST['category_id'],
            $_POST['member_id'], $_POST['image_id'], $_POST['publish']);
        echo "Them thanh cong";
    }

    public function edit()
    {

    }

    public function delete()
    {
        ArticleService::deleteArticle($_POST['id']);
    }
}