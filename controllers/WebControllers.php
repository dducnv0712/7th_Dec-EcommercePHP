<?php
include_once "Database_.php";
class WebControllers{
    public function home(){

    }

    public function listProduct(){
        //lấy ra danh sách sản phẩm
        $sql_txt = "select * from list_product";
        $list_product = queryDB($sql_txt);
        require_once "views/component/Navbar.php";
        include "views/ListProduct.php";
        require_once "views/component/Footer.php";
    }
    public function productDetails(){
        //chi tiết sản phẩm
        $id = $_GET['details'];
        $sql_txt = "select * from list_product where id= '$id'";
        $product= productDB($sql_txt);
        require_once "views/component/Navbar.php";
        include "views/productDetails.php";
        require_once "views/component/Footer.php";


    }
    public function cartProduct(){

        //danh sách sản phẩm trong giỏ hàng
        session_start();
        $cart = $_GET['cart'];
        $sql_txt = "select * from list_product where id = '$cart'";
        $cart_product = queryDB($sql_txt);
        if(count($cart_product)==0) header("Location: ?route=cartListPro");
        $product = $cart_product[0];
        $cart_List = [];
        if($_SESSION["product_List"]){
            $cart_List = $_SESSION["product_List"];

        }

        $cart_List[] = $product;
        $_SESSION["product_List"] = $cart_List;
        header("Location: ?route=cartListPro");

        }


        public function cartListProduct(){

        $cart_List = [];
        if($_SESSION["product_List"]){
            $cart_List = $_SESSION["product_List"];
        }
            require_once "views/component/Navbar.php";
            include "views/cartListProduct.php";
            require_once "views/component/Footer.php";


        }
    public function productStorage(){
        //thêm sản phẩm mới vào danh sách
        $id = $_POST['id-product'];
        $name = $_POST['name-product'];
        $images = $_POST['images-product'];
        $category = $_POST['category-product'];
        $price = $_POST['price-product'];
        $describe_pr = $_POST['describe-product'];


        $sql_txt = "insert into list_product (id,name,images,category,price,describe_pr) values ('$id','$name','$images','$category','$price','$describe_pr')";
        if (updateDB($sql_txt)) {
            header("location:?route=listProduct");
        } else {
            echo "<script>alert('Thêm thất bại')</script>";        }
    }
}
