<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Sản Phẩm</title>
    <link href="../../7th_Decemb/views/css/ListProduct.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="../../7th_Decemb/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link href="../../7th_Decemb/views/libs/fontawesome5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>



<div class="h-100 container">

    <main class="mt-5">


        <h1 class="text-center mt-3 mb-3 font-weight-bold">Danh Sách Sản Phẩm</h1>

        <table id="example"  style="width:100%" class="display table">

            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Thể Loại</th>
                <th scope="col">Giá Sản Phẩm</th>
                <th scope="col">Xem Chi Tiết</th>
                <th scope="col">Chức Năng</th>
            </tr>
            </thead>
            <tbody id="#tbody">

            <?php $num =1; foreach ($list_product as $item) {?>
                <tr >
                    <th  scope="row"><?php  echo   $num++; ?></th>
                    <td ><?php echo $item["id"];?></td>
                    <td class="table-name"><?php echo $item["name"];?></td>
                    <td ><?php echo $item["category"];?></td>
                    <td ><?php echo number_format($item["price"],0,",",'.')." VNĐ"; ?></td>
                    <td >

                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="?route=proDetails&details=<?php echo $item['id']; ?>"   class="btn shadow btn-info ">
                                Xem Chi Tiết
                            </a>
                        </div>

                    </td>

                    <td>
                        <!-- phím chức năng -->
                        <div class="btn-group shadow" role="group" aria-label="Basic mixed styles example">

                            <button   class="btn edit-btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-product-<?php echo $item['id'];?>" >Sửa</button>
                            <button   class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_product-<?php echo $item['id']; ?>">
                                Xóa
                            </button>
                        </div>


                        <!--Popup Xóa Sản Phẩm -->
                        <div class="modal fade" id="delete_product-<?php echo $item['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn Muốn Xóa Sản Phẩm <?php echo $item['name'] ?>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button onclick="window.location.href='?route=deletePro&delete=<?php echo $item['id']?>'"  class="btn btn-danger">Xóa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- kết thúc popup xóa sản phẩm -->



                        <!--Sửa sản phẩm-->
                        <div id="edit-product-<?php echo $item['id'];?>" class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title fw-bolder justify-content-center" id="exampleModalLabel">Sửa Sản Phẩm <?php echo $item['name']?></h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="?route=updatePro" method="post"><!--UPDATE-->
                                            <!--Thẻ input ẩn để lấy ID sửa sản phẩm -->
                                            <input type="hidden" name='id_edit_input' class="form-control" value="<?php echo $item['id']?>"  >
                                            <!----->

                                            <div class="mb-3">
                                                <label for="edit-id" class="fw-bolder col-form-label">ID</label>
                                                                                                                 <!-- lấy thông tin cũ -->
                                                <input type="text" name='id_edit' class="form-control" value="<?php echo $item['id']?>" id="edit-id" >
                                            </div>

                                            <div class="mb-3">
                                                <label for="edit-name" class="fw-bolder col-form-label">Tên Sản Phẩm</label>
                                                                                                                <!-- lấy thông tin cũ -->
                                                <input type="text" name="name_edit" class="form-control"  value="<?php echo $item['name']?>" id="edit-name" >
                                            </div>

                                            <div class="mb-3">
                                                <label for="edit-category" class="fw-bolder col-form-label">Ảnh Sản Phẩm</label>
                                                                                                                <!-- lấy thông tin cũ -->
                                                <input type="text" name="images_edit" class="form-control" value="<?php echo $item['images']?>" id="edit-category" >
                                            </div>

                                            <div class="mb-3">
                                                <label for="edit-category" class="fw-bolder col-form-label">Thể Loại</label>
                                                                                                                        <!-- lấy thông tin cũ -->
                                                <input type="text" name="category_edit" class="form-control" value="<?php echo $item['category']?>" id="edit-category" >
                                            </div>

                                            <div class="mb-3">
                                                <label for="edit-price" class="fw-bolder col-form-label">Giá Sản Phẩm</label>
                                                                                                                <!-- lấy thông tin cũ -->
                                                <input type="text" name="price_edit" class="form-control" value="<?php echo $item['price']?>" id="edit-price" >
                                            </div>

                                            <div class="mb-3">
                                                <label for="edit-describe" class="fw-bolder col-form-label">Mô Tả Sản Phẩm</label>
                                                                                                                                            <!-- lấy thông tin cũ -->
                                                <textarea type="text" name="describe_edit" class="form-control"   id="edit-describe"  required><?php echo $item['describe_pr']?></textarea>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit"  class="btn btn-primary">Sửa Sản Phẩm</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--kết thúc form -->
                    </td>
                </tr>
            <?php }?>


            </tbody>
        </table>


        <div class="justify-content-center d-grid gap-2">
            <button type="button" class="btn mb-5  edit-btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#add-product" >Thêm Sản Phẩm</button>
        </div>


        <!-- Form Thêm Sản Phẩm-->
        <div id="add-product" class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bolder " id="exampleModalLabel">Thêm Sản Phẩm</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="?route=proStorage" method="post">

                            <div class="mb-3">
                                <label for="recipient-name" class="fw-bolder col-form-label">ID:</label>
                                <input type="text" name='id-product' class="form-control" id="recipient-name" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="fw-bolder col-form-label">Tên Sản Phẩm:</label>
                                <input type="text" name="name-product" class="form-control" id="recipient-name" required>
                            </div>


                            <div class="mb-3">
                                <label for="recipient-name" class="fw-bolder col-form-label">Ảnh Sản Phẩm</label>
                                <input type="text" name="images-product" class="form-control" id="recipient-name" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="fw-bolder col-form-label">Thể Loại Sản Phẩm:</label>
                                <input type="text" name="category-product" class="form-control" id="recipient-name" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="fw-bolder col-form-label">Giá Sản Phẩm:</label>
                                <input type="text" name="price-product" class="form-control" id="recipient-name" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="fw-bolder col-form-label">Mô Tả Sản Phẩm</label>
                                <textarea type="text" name="describe-product" class="form-control" id="recipient-name" required></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--Kết Thúc Form Thêm Sản Phẩm -->
    </main>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

</body>
</html>
