<?php
include("services/AuthorService.php");
class AuthorController{
    public function index(){
        $authorService = new AuthorService();
        $authors = $authorService->getAllAuthors();
        include("views/author/index.php");
    }
    public function type_add(){
        include("views/author/add_author.php");
    }

    public function add() {
        $authorService = new AuthorService();
        $authors = $authorService->addAuthor($_POST['txt_tentgia']);
        include("views/author/index.php");
    }

    public function edit() {
        //Viết code lấy dữ liệu có sẵn đổ vào input

        //đổ view edit author vào web
        include("views/author/edit_author.php");
    }
}