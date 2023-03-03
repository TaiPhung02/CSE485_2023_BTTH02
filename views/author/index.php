<?php
include("views/includes/header_admin.php")
?>
<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <a href="add_author.php" class="btn btn-success">Thêm mới</a>
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
                       
                        <tr>
                            <th scope="row"><?php echo $row['ma_tgia']?></th>
                            <td>tacgia</td>
                            <td>
                                <a href="edit_author.php?matgia=1"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="process_components/process_delete_author.php?matgia=1"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php
    include("views/includes/footer_admin.php");
?>