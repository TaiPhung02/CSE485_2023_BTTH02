<?php
include ("views/includes/header_admin.php");
?>

<main class="container mt-5 mb-5">

    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin bài viết</h3>
            <form action="./index.php?controller=article&action=update" enctype="multipart/form-data"  method="post">
            <input type="hidden" name="path" value="assets/images/songs/">
            <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Mã bài viết</span>
                    <input type="text" class="form-control" name="txtid"value=" <?php echo $id_articles[0]['ma_bviet']?>" >
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên tiêu đề</span>
                    <input type="text" class="form-control" name="txttieude"value=" <?php echo $id_articles[0]['tieude']?>" >
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                    <input type="text" class="form-control" name="txttenbhat" value=" <?php echo $id_articles[0]['ten_bhat']?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Thể loại</span>
                    <select class="form-select" name="txtmatheloai">
                    <option selected value="<?php echo $id_articles[0]['ma_tloai']; ?>"><?php echo $id_articles[0]['ten_tloai']; ?></option>
                        <?php
                            foreach($id_categories as $category) {  
                        ?>
                            <option value="<?php echo $category->getMaTloai() ?>"><?php echo $category->getTenTloai() ?></option>
                        <?php
                            }      
                        ?>
                    </select>     
                </div>
                <div class="input-group mt-3 mb-3">
                    <span style = "padding: 0px 25px 0px 25px" class="input-group-text" id="lblCatName">Tóm tắt</span>
                    <textarea type="text" class="form-control" name="txttomtat" > <?php echo $id_articles[0]['tomtat'] ?></textarea>
                </div>
                <div class="input-group mt-3 mb-3">
                    <span  style = "padding: 0px 18px 0px 18px" class="input-group-text" id="lblCatName">Nội dung</span>
                    <textarea type="text" class="form-control" name="txtnoidung" > <?php echo $id_articles[0]['noidung'] ?></textarea>
                </div>
                <div class="input-group mt-3 mb-3">
                    <span style = "padding: 0px 15px 0px 15px" class="input-group-text" id="lblCatName">Tác giả</span>
                    <select class="form-select" name="txtmatgia">
                    <option selected value="<?php echo $id_articles[0]['ma_tloai']; ?>"><?php echo $id_articles[0]['ten_tgia']; ?></option>
                        <?php
                            foreach($id_authors as $author) {  
                        ?>
                            <option value="<?php echo $author->getMaTgia() ?>"><?php echo $author->getTenTgia() ?></option>
                        <?php
                            }      
                        ?>
                    </select>
                </div>
                <div class="input-group mt-3 mb-3">
                    <span style = "padding: 0px 18px 0px 18px" class="input-group-text" id="lblCatName">Ngày viết</span>
                    <input type="datetime-local" id="date-input" name="date-input" value=" <?php echo $id_articles[0]['ngayviet']?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span style = "padding: 0px 18px 0px 18px" class="input-group-text" id="lblCatName">Hình ảnh</span>
                    <input type="file" id="file-upload" name="file-upload" value=" <?php echo $id_articles[0]['hinhanh'] ?>">
                </div>
                <div class="form-group  float-end ">
                    <input type="submit" value="Lưu lại" class="btn btn-success">
                    <a href="index.php?controller=article" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include("views/includes/footer_admin.php");
?>