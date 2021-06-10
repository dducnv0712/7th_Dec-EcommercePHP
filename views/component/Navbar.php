<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="../../../7th_Decemb/views/component/css/Navbar.css">
    <link rel="stylesheet" href="../../../7th_Decemb/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../7th_Decemb/views/libs/fontawesome5.15.1/css/all.min.css">

</head>
<body>
<?php
$count = 0;
if(isset($_SESSION['product_List'])){
    $count= count($_SESSION['product_List']);
}
?>
<header>
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container-nav">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="?route=/" class="d-flex fw-bold fs-4 align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    7TH OF DECEMBER
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li class="nav-item">
                        <a href="?route=/" class="nav-link d-grid justify-content-center text-white">
                            <span class="bi d-block mx-auto mb-1"> <i class="fas fs-5 d-inline fa-home"></i></i></span>
                            Trang Chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?route=listProduct" class="nav-link text-white d-grid justify-content-center ">
                            <span class="bi d-block mx-auto mb-1"> <i class="fas fs-5 d-inline fa-list-alt"></i></i></span>
                            Danh Sách Sản Phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-grid justify-content-center text-white">
                            <span class="bi d-block mx-auto mb-1"> <i class="fas fs-5 d-inline fa-heart"></i></i></span>
                            Sản Phẩm Yêu Thích
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?route=cartListPro" class="nav-link text-white  d-grid justify-content-center ">
                            <span>
                            <span> <i class="fas fs-5 d-inline fa-shipping-fast"></i></i></span>
                            <span class="badge badge-pill bg-danger">0</span>
                            </span>
                            Đang Giao Hàng
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="?route=cartListPro" class="nav-link text-white d-grid justify-content-center ">
                         <span>
                            <span> <i class="fas fs-5 d-inline fa-shopping-cart"></i></i></span>
                            <span class="badge badge-pill bg-danger"><?php echo $count?></span>
                            </span>
                            Giỏ Hàng
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="px-3 py-2 border-bottom sticky-top  mb-3 d-flex  align-items-center" style=" z-index: 99999 ;position: sticky" >
        <div  class="container  d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            <div class="dropdown">
                <button class="btn bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://scontent-xsp1-3.xx.fbcdn.net/v/t1.6435-9/127276256_1330240820660968_9032823244503499320_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=_2yppS3Ye08AX8ExH2l&_nc_ht=scontent-xsp1-3.xx&oh=6b13efe2eb2c2dfd05c298316303c051&oe=60E6C4B8" class="rounded-circle"
                             style="height: 34px;" alt="avatar image">
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-right rounded-3" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#"><i class="fas mx-2 fa-sign-out-alt"></i> Đăng Xuất</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas mx-2 fa-user"></i> Hồ Sơ</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas mx-2 fa-cog"></i> Cài Đặt </a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn bg-transparent dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="badge badge-pill bg-danger">0</span>
                    <span> <i class="fas fs-5 d-inline fa-bell"></i></i></span>

                </button>
                <ul class="dropdown-menu dropdown-menu-lg-right rounded-3" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>



    </div>
</header><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../../7th_Decemb/views/libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
