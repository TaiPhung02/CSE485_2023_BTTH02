<?php
include("services/CategoryService.php");
class CategoryController{
    public function index(){
        $categoryService = new CategoryService();
        $categories = $categoryService->getAllCategory();
        include("views/category/index.php");
    }
// từ dòng 9 đến dòng 19 là của add ============================================================
    public function type_add(){
        include("views/category/add_category.php");
    }

    public function add(){
        $categoryService = new CategoryService();
        $categories = $categoryService->addCategory($_POST['txt_tentloai']);
        include("views/category/index.php");
    }
// từ dòng 19 đến dòng 33 là của edit ============================================================

    public function edit($id){
        $categoryService = new CategoryService($id);
        $id_categories = $categoryService->get_id_Category($id);
        include("views/category/edit_category.php");
    }


    public function update(){
        $categoryService = new CategoryService();
        $categories = $categoryService->updateCategory($_POST['txt_matloai'],$_POST['txt_tentloai']);
        include("views/category/index.php");
    }

// Còn lại là delete là của edit ============================================================
    public function delete(){
        $categoryService = new CategoryService();
        $categories = $categoryService->deleteCategory($_GET['id']);
        include("views/category/index.php");
    }
}