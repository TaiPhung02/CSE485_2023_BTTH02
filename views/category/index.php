<?php
include("views/includes/header_admin.php")
?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="index.php?controller=category&action=type_add" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên thể loại</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            foreach($categories as $category){
                        ?>
                    <tr>
                        <th scope="row"><?php echo $category -> getMaTloai() ?></th>
                        <td>
                            <?php echo $category -> getTenTloai() ?>
                        </td>
                        <td>
                        <a href="index.php?id=<?php echo $category->getMaTloai() ?>&controller=category&action=edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="process_components/process_delete_category.php?matloai=1"><i class="fa-solid fa-trash"></i></a>
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