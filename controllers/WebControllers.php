<?php
include_once "Database_.php";
class WebControllers{
    public function home(){
        $sql_txt = "select * from list_product";
        $list_product = queryDB($sql_txt);
        include "views/component/Navbar.php";
        include "views/Home.php";
        include "views/component/Footer.php";

    }

    public function listProduct(){
        //lấy ra danh sách sản phẩm
        $sql_txt = "select * from list_product";
        $list_product = queryDB($sql_txt);
        include "views/component/Navbar.php";
        include "views/ListProduct.php";
        include "views/component/Footer.php";
    }
    public function productDetails(){
        //chi tiết sản phẩm
        $id = $_GET['details'];
        $sql_txt = "select * from list_product where id= '$id'";
        $product= productDB($sql_txt);
        include "views/component/Navbar.php";
        include "views/productDetails.php";
        include "views/categoryList.php";
        include "views/component/Footer.php";


    }
    public function deleteProduct(){
        $id = $_GET['delete'];
        $sql_txt = "delete from list_product where id= '$id'";
        if (updateDB($sql_txt)) {
            header("location: ?route=listProduct");
        } else{
            echo "<script>alert('Xóa Thất Bại')</script>";

        }


    }
    public function updateProduct(){
        $id_input = $_POST['id_edit_input'];
        $id = $_POST['id_edit'];
        $name = $_POST['name_edit'];
        $images = $_POST['images_edit'];
        $category = $_POST['category_edit'];
        $price = $_POST['price_edit'];
        $describe = $_POST['describe_edit'];

        $sql_txt = "UPDATE list_product SET id ='$id', name = '$name',images ='$images', category ='$category', describe_pr ='$describe', price ='$price' WHERE id='$id_input' ";

        if(updateDB($sql_txt)){
            header("Location: ?route=listProduct");
        }else{
            echo "Cap nhat that bai";
        }

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
            session_start();
            $cart_List = [];
        if($_SESSION["product_List"]){
            $cart_List = $_SESSION["product_List"];
        }
            include "views/component/Navbar.php";
            include "views/Home.php";
            include "views/cartListProduct.php";
            include "views/component/Footer.php";


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
    public function categoryList(){
        $sql_txt = "select * from list_product where category ='Laptop'";
        $list_product = queryDB($sql_txt);
        include "views/categoryList.php";

    }
}
