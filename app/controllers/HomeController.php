<?php
require_once APP_ROOT . '/app/services/ArticleService.php';
class HomeController{
    public function index()
    {
        $datas = ArticleService::getAllArticle();
        include APP_ROOT . '/app/views/home/index.php';
    }
}