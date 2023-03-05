<?php
include("services/UserService.php");
class UserController{
    public function index(){
        $userService = new UserService();
        $users = $userService->getAllUser();
        include("views/user/index.php");
    }

    public function type_add(){
        include("views/user/add_user.php");
    }

    public function add(){
        $userService = new UserService();
        $users = $userService->addUser($_POST['txt_taikhoan'], $_POST['txt_matkhau'], $_POST['txt_quyen']);
        include("views/user/index.php");
    }

    public function edit($id){
        $userService = new UserService($id);
        $id_users = $userService->get_id_User($id);
        include("views/user/edit_user.php");
    }

    public function update(){
        $userService = new UserService();
        $users = $userService->updateUser($_POST['txt_nguoidung'], $_POST['txt_taikhoan'], $_POST['txt_matkhau'], $_POST['txt_quyen']);
        include("views/user/index.php");
    }

    public function delete(){
        $userService = new UserService();
        $users = $userService->deleteUser($_GET['id']);
        include("views/user/index.php");
    }
}

    