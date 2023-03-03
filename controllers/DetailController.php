<?php
require("services/ArticleService.php");
class DetailController {
    public function index($ma_bviet) {
        $articleService = new ArticleService();
        $detailArticle = $articleService->getDetailArticle($ma_bviet);
        include("views/home/detail.php");
    }
}
