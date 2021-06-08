<?php
include_once "controllers/WebControllers.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new WebControllers();
switch ($route){
//    case "login": $controller->login();break;
    case "listProduct": $controller->listProduct();break;
    case "proStorage": $controller->productStorage();break;
    case "proDetails": $controller->productDetails();break;
    case "cartPro": $controller->cartProduct();break;
    case "cartListPro": $controller->cartListProduct();break;


    default: $controller->home();
}