<?php
require_once('../app/config/config.php');

$route = isset($_GET['route']) ? $_GET['route'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = ucfirst($route);
$controller = $controller . "Controller";
$controllerPath = '/app/controllers/' . $controller . '.php';
require_once(APP_ROOT . $controllerPath);
$objController = new $controller();
$objController->$action();
//if ($route == "home") {
//    require_once(APP_ROOT . '/app/controllers/HomeController.php');
//    $homeController = new HomeController();
//    $homeController->index();
//}
//else if ($route == "article") {
//    require_once APP_ROOT.'/app/controllers/ArticleController.php';
//    $articleController = new ArticleController();
//    $articleController->create();
//}
//else{
//    echo "Khong tim thay duong dan";
//}
