<?php
require("services/ArticleService.php");
class HomeController {
    public function index() {
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticles();
        include("views/home/index.php");
    }
}