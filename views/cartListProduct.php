<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="../../7th_Decemb/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../7th_Decemb/views/libs/fontawesome5.15.1/css/all.min.css">

</head>
<body>

<div class="container">

    <main>

        <!--Section: Block Content-->
        <section>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-8">

                    <!-- Card -->
                    <div class="mb-3">
                        <div class="pt-4 wish-list">

                            <h5 class="mb-4">Giỏ Hàng(<span><?php echo $count ?></span> Sản Phẩm)</h5>
                            <?php  foreach ($cart_List as $product){ ?>

                                <hr class="mb-4">
                                <div class="row mb-4 cart_list">
                                    <div class="col-md-5 col-lg-3 col-xl-3">
                                        <div class="view zoom overlay cart_item_image z-depth-1 rounded mb-3 mb-md-0">
                                            <img class="img-fluid w-100"
                                                 src="<?php echo $product['images']  ?>" alt="Sample">

                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-9 col-xl-9">
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="product-name"> <?php echo $product['name']  ?></h5>
                                                    <p class="mb-3 text-muted text-uppercase small">Shirt - red</p>
                                                    <p class="mb-2 text-muted text-uppercase small">Color: red</p>
                                                    <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                                </div>
                                                <div>
                                                    <div class="def-number-input number-input safari_only mb-0 w-100">

                                                        <div class="input-group mb-3">
                                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                                    class="minus btn  btn-primary"><i class="fas fa-minus"></i></button>
                                                            <input type="number" min="0" value="1" class="form-control" style="width:50px" aria-label="Text input with 2 dropdown buttons">
                                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                                    class="plus btn btn-primary"><i class="fas fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                            class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                                    <a href="#" type="button" class="card-link-secondary small text-uppercase"><i
                                                            class="fas fa-heart mr-1"></i> Move to wish list </a>
                                                </div>
                                                <?php $total += $product['price'] ?>
                                                <p class="mb-0"><span><strong><?php echo  number_format($product["price"],0,",",'.')." VNĐ" ?></strong></span></p class="mb-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                            <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
                                items to your cart does not mean booking them.</p>

                        </div>
                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="mb-3">
                        <div class="pt-4">

                            <h5 class="mb-4">Expected shipping delivery</h5>

                            <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
                        </div>
                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="mb-3">
                        <div class="pt-4">

                            <h5 class="mb-4">We accept</h5>

                            <img class="mr-2" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                 alt="Visa">
                            <img class="mr-2" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                 alt="American Express">
                            <img class="mr-2" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                 alt="Mastercard">
                            <img class="mr-2" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                                 alt="PayPal acceptance mark">
                        </div>
                    </div>
                    <!-- Card -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4">

                    <!-- Card -->
                    <div class="mb-3 ">
                        <div class="pt-4 ">

                            <h5 class="mb-3">The total amount of</h5>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Số Tiền Tạm Thời
                                    <span><?php echo   number_format($total,0,",",'.')." VNĐ" ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Vận Chuyển
                                    <span>Viettel Post</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Tổng Số Tiền</strong>
                                        <strong>
                                            <p class="mb-0">(Đã Bao Gồm VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>$<?php echo   number_format($total,0,",",'.')." VNĐ" ?></strong></span>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-primary btn-block">Thanh Toán</button>

                        </div>
                    </div>
                    <!-- Card -->

                    <!-- Card -->

                    <!-- Card -->

                </div>
                <!--Grid column-->

            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Block Content-->







    </main>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
</body>
</html>

