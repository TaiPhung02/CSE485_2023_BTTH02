<?php
include("services/CategoryService.php");
class CategoryController{
    public function index(){
        $categoryService = new CategoryService();
        $categories = $categoryService->getAllCategory();
        include("views/category/index.php");
    }

    public function type_add(){
        include("views/category/add_category.php");
    }

    public function add(){
        $categoryService = new CategoryService();
        $categories = $categoryService->storeCategory($_POST['txt_tentloai']);
        include("views/category/index.php");
    }


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
}