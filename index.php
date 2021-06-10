<?php
include_once "controllers/WebControllers.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new WebControllers();
switch ($route){
//    case "login": $controller->login();break;
    case "listProduct": $controller->listProduct();break;//danh sach san pham admin quan ly
    case "proStorage": $controller->productStorage();break;//lu tru san pham khi them
    case "updatePro": $controller->updateProduct();break;//cap nhat thong tin san pham
    case "deletePro": $controller->deleteProduct();break;//xoa san pham
    case "proDetails": $controller->productDetails();break;//thong tin chi tiet san pham
    case "deleteCart": $controller->deleteCartList();break;//luu tru gio hang
    case "cartPro": $controller->cartProduct();break;//luu tru gio hang
    case "cartListPro": $controller->cartListProduct();break;//hien thi gio hang


    default: $controller->home();
}