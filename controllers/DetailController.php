<?php
require("services/ArticleService.php");
class DetailController {
    public function index($id) {
        $articleService = new ArticleService();
        $detailArticles = $articleService->getDetailArticle($id);
        include("views/home/detail.php");
    }
}
