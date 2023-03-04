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

    public function edit($id) {
        $authorService = new AuthorService($id);
        $id_authors = $authorService->get_id_Author($id);
        include("views/author/edit_author.php");
    }
    public function update(){
        $authorService = new AuthorService();
        $authors = $authorService->updateAuthor($_POST['txt_matgia'],$_POST['txt_tentgia']);
        include("views/author/index.php");
    }
    public function delete(){
        $authorService = new AuthorService();
        $authors = $authorService->deleteAuthor($_GET['id']);
        include("views/author/index.php");
    }
}