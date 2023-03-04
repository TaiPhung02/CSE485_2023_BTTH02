<?php
include("views/includes/header_admin.php")
?>
<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <a href="./index.php?controller=author&action=type_add" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên tác giả</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       foreach($authors as $author){
                       ?>
                        <tr>
                            <th scope="row"><?php echo $author -> getMaTgia()?></th>
                            <td> <?php echo $author -> getTenTgia()?> </td>
                            <td>
                                <a href="index.php?id=<?php echo $author->getMaTgia() ?>&controller=author&action=edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="index.php?controller=author&action=delete&id=<?php echo $author->getMaTgia() ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php
    include("views/includes/footer_admin.php");
?>