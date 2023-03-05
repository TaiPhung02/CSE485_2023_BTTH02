<?php
include_once("services/ArticleService.php");
include_once("services/AuthorService.php");
include_once("services/CategoryService.php");

class ArticleController{
    public function index(){
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticle();
        include_once("views/article/index.php");
    }

    public function type_add(){
        $authorService = new AuthorService();
        $authors = $authorService->getAllAuthors();
        $categoryService = new CategoryService();
        $categories = $categoryService->getAllCategory();
        include_once("views/article/add_article.php");
    }

    public function add(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tieuDe = $_POST['txttieude'];
            $baiHat = $_POST['txttenbhat'];
            $maTloai = $_POST['txtmatheloai'];
            $tomTat = $_POST['txttomtat'];
            $noiDung = $_POST['txtnoidung'];
            $maTgia = $_POST['txtmatgia'];
            $ngayViet = $_POST['date-input'];
            $link =  $_POST['path'].$_FILES['file-upload']['name'];
            $hinhAnh = $_FILES['file-upload']['name'];
        
            $articleService = new ArticleService();
            $articleService->addArticle($tieuDe, $baiHat, $maTloai, $tomTat, $noiDung, $maTgia, $ngayViet, $hinhAnh);
            move_uploaded_file($_FILES['file-upload']['tmp_name'], $link);
            header("Location:index.php?controller=article&action=index");
        }
    }

    public function edit($id){
        $articleService = new ArticleService($id);
        $id_articles = $articleService->get_id_Article($id);
        include("views/article/edit_article.php");
    }


    public function update(){
        $articleService = new ArticleService();
        $articles = $articleService->updateArticle($_POST['txt_matloai'],$_POST['txt_tentloai']);
        include("views/article/index.php");
    }

}