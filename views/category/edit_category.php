<?php
include ("views/includes/header_admin.php");

?>

<main class="container mt-5 mb-5">

    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
            <form action="./index.php?controller=category&action=update" method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                    <input type="text" class="form-control" name="txt_matloai" readonly value=" <?php echo $id_categories[0] -> getMaTloai() ?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                    <input type="text" class="form-control" name="txt_tentloai" value=" <?php echo $id_categories[0] -> getTenTloai() ?>">
                </div>
                <div class="form-group  float-end ">
                    <input type="submit" value="Lưu lại" class="btn btn-success">
                    <a href="index.php?controller=category" class="btn btn-warning ">Quay lại</a>
                </div>

            </form>
        </div>
    </div>
</main>

<?php
include("views/includes/footer_admin.php");
?>