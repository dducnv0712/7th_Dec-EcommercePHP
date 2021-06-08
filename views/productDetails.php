<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" href="../../7th_Decemb/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../7th_Decemb/views/libs/fontawesome5.15.1/css/all.min.css">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
</head>
<body>

<div class="container-xl">
    <h2 class="mt-5">Chi Tiết Sản Phẩm</h2>
    <!--Section: Block Content-->
    <section class="mb-5 mt-5">

        <div class="row">
            <div class="col-md-6 mt-3 mb-4 mb-md-0">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox">

                    <div class="row product-gallery mx-1">

                        <div class="col-12 mb-0">
                            <div  class="view rounded z-depth-1 main-img">
                                <a     href="<?php echo $product['images']?>"
                                       data-size="710x823">
                                    <img  src="<?php echo $product['images']?>"
                                          class="rounded-3 img-fluid z-depth-1" alt="<?php echo $product['name']?>">
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-6 mt-3">

                <h3 class="fw-bold"><?php echo $product['name']?></h3>
                <p class="mb-2 text-muted text-uppercase small"><?php echo $product['category']?></p>
                <div class="text-warning review-block-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><span class="mr-1"><strong><?php echo number_format($product["price"],0,",",'.')." VNĐ"?></strong></span></p>
                <h5 class="fw-bold">Mô Tả Sản Phẩm</h5>
                <p class="pt-1"><?php echo $product['describe_pr']?></p>
                <div class="table-responsive">
                    <table class="table table-sm table-borderless mb-0">
                        <tbody>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
                            <td><?php echo $product['id']?></td>
                        </tr>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                            <td>Black</td>
                        </tr>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                            <td>USA, Europe</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="table-responsive mb-2">
                    <table class="table table-sm table-borderless">
                        <tbody>
                        <tr>
                            <td class="pl-0 pb-0 w-25">
                                <label for="qty">Số Lượng</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0">
                                <div class="def-number-input number-input safari_only mb-0">
                                    <div class="input-group mb-3">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="minus btn  btn-primary"><i class="fas fa-minus"></i></button>
                                        <input type="number" min="0" value="1" class="form-control qtyProduct" aria-label="Text input with 2 dropdown buttons">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="plus btn btn-primary"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-md mr-1 mt-3 mb-2">Buy now</button>
                                <a href="?route=cartPro&cart=<?php echo $product['id']?>"  class="btn mt-3 btn-light btn-md mr-1 mb-2">Add</a>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section>

    <!--Danh gia san pham-->
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                <div class="rating-block">
                    <h4>Xếp Hàng Trung Bình</h4>
                    <div class="text-warning review-block-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h2 class="bold padding-bottom-7">4.5 <small>/ 5</small></h2>

                </div>
            </div>
            <div class="col-sm-3">
                <h4>Xếp Hạng Đánh Giá</h4>
                <div class="pull-left" style="display:flex;">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">5 <i class="text-warning fas fa-star"></i> <span class="glyphicon glyphicon-star"></span></div>
                        <div class="ret">
                        </div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width:0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-left" style="display:flex;">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">4 <i class="text-warning fas fa-star"></i> <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 100%">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-left" style="display:flex;">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">3 <i class="text-warning fas fa-star"></i> <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 0">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-left" style="display:flex;">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">2 <i class="text-warning fas fa-star"></i> <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width:0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-left" style="display:flex;">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">1 <i class="text-warning fas fa-star"></i> <span class="glyphicon glyphicon-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width:0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7">
                <hr/>
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="mt-2 review-block-date">06-06-2021<br/>1 ngày trước</div>
                        </div>
                        <div class="col-sm-9">
                            <h6>Nguyễn Văn Đức</h6>
                            <div class="text-warning review-block-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="review-block-title">Tuyệt Vời</div>
                            <div class="review-block-description">Wowwww này là sản phẩm chất lượng !</div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-sm-7">
                <hr/>
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded" alt="/">
                            <div class="mt-2 review-block-date">06-06-2021<br/>1 ngày trước</div>
                        </div>
                        <div class="col-sm-9">
                            <h6>Nguyễn Hồng Quang</h6>
                            <div class="text-warning review-block-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="review-block-title">Tuyệt Vời</div>
                            <div class="review-block-description">Wowwww này là sản phẩm chất lượng !</div>
                        </div>
                    </div>


                </div>
            </div>        <div class="col-sm-7">
                <hr/>
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="mt-2 review-block-date">06-06-2021<br/>1 ngày trước</div>
                        </div>
                        <div class="col-sm-9">
                            <h6>TRần Duy Quân</h6>
                            <div class="text-warning review-block-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="review-block-title">Tuyệt Vời</div>
                            <div class="review-block-description">Wowwww này là sản phẩm chất lượng !</div>
                        </div>
                    </div>


                </div>
            </div>


        </div>

    </div>




    <!--Section: Block Content-->
</div>
<script>
    $(document).ready(function () {
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
