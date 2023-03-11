<?php
include("views/includes/header_admin.php")
?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="index.php?controller=article&action=type_add" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Tiêu Đề</th>
                        <th scope="col">Tên Bài Hát</th>
                        <th scope="col">Tên Tác Giả</th>
                        <th scope="col">Tóm tắt</th>
                        <th scope="col">Ngày</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            foreach($articles as $article) {
                        ?>
                    <tr>
                        <th scope="row"><?php echo $article -> getMaBviet() ?></th>
                        <td>
                            <?php echo $article -> getTieude() ?>
                        </td>
                        <td>
                            <?php echo $article -> getTenBhat() ?>
                        </td>
                        <td>
                            <?php echo $article -> getTomtat() ?>
                        </td>
                        <td>
                            <?php echo $article -> getMaTgia() ?>
                        </td>
                        <td>
                            <?php echo $article -> getNgayviet() ?>
                        </td>
                        <td>
                        <a href="index.php?controller=article&action=edit&id=<?php echo $article->getMaBviet()?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="index.php?controller=article&action=delete&id=<?php echo $article->getMaBviet() ?>" ><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                        } 
                    ?>                  
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
include("views/includes/footer_admin.php");
?>