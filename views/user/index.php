<?php
include("views/includes/header_admin.php")
?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href="index.php?controller=user&action=type_add" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Quyền</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                            foreach($users as $user){
                        ?>
                    <tr>
                        <th scope="row"><?php echo $user -> getIdUser() ?></th>
                        <td>
                            <?php echo $user -> getTkUser() ?>
                        </td>
                        <td>
                            <?php echo $user -> getMkUser() ?>
                        </td>
                        <td>
                            <?php echo $user -> getQuyenUser() ?>
                        </td>
                        <td>
                        <a href="index.php?id=<?php echo $user->getIdUser() ?>&controller=user&action=edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="index.php?controller=user&action=delete&id=<?php echo $user->getIdUser() ?>" ><i class="fa-solid fa-trash"></i></a>
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