<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="../../7th_Decemb/views/css/Home.css">
    <link rel="stylesheet" href="../../7th_Decemb/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../7th_Decemb/views/libs/fontawesome5.15.1/css/all.min.css">


</head>
<body>
<div class="container h-100">
    <!--Section: Block Content-->
    <section>

        <!-- Grid row -->
        <div class="row">
            <?php  foreach ($list_product as $item) {?>
                <!-- san pham -->
                <div class="col-md-3 mt-5 ">

                    <!-- Card -->
                    <a class="card-items text-center"  href="?route=proDetails&details=<?php echo $item['id']?>">
                        <div class="card rounded-3 " style="width: 18rem; float:left">
                            <div class="img-card">
                                <img src="<?php echo $item['images']; ?>" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="text-dark card-title"><?php echo $item['name']; ?></h5>
                                <div class="text-dark"><?php echo number_format($item["price"],0,",",'.')." VNĐ"; ?></div>
                                <div class="text-warning review-block-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>

                                </div>
                                <div class="see-details bg-primary rounded-bottom">
                                    <h6>Xem Chi Tiết</h6>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Card -->

                </div>
                <!-- san pham -->
            <?php }?>








        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Block Content-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

