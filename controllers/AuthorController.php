<?php
include("services/AuthorService.php");
class AuthorController{
    public function index(){
        $authorService = new AuthorService();
        $authors = $authorService->getAllAuthors();
        include("views/author/author.php");
    }

    public function add() {
        //đổ view add author vào trang web
        include("views/author/add_author.php");
    }

    public function edit() {
        //Viết code lấy dữ liệu có sẵn đổ vào input

        //đổ view edit author vào web
        include("views/author/edit_author.php");
    }
}