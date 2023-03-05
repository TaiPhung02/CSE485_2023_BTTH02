<?php
require_once ("configs/DBConnection.php");
include ("models/Article.php");
class ArticleService {
    public function getAllArticle() {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM baiviet
                INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
                INNER JOIN theloai ON theloai.ma_tloai = baiviet.ma_tloai";
        $stmt = $conn->query($sql);

        $articles = [];
        while($row = $stmt->fetch()){
            $article = new Article($row['ma_bviet'], $row['tieude'], $row['ten_bhat'], $row['ma_tloai'], $row['tomtat'], $row['noidung'], $row['ten_tgia'], $row['ngayviet'], $row['hinhanh']);
            array_push($articles,$article);
        }

        return $articles;
    }

    public function getDetailArticle($id) {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        
        $sql = "SELECT *
        FROM baiviet
        INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
        INNER JOIN theloai ON theloai.ma_tloai = baiviet.ma_tloai
        WHERE ma_bviet = '".$id."'";
        $stmt = $conn->query($sql);

        $detailArticles = [];
        while ($row = $stmt->fetch()) {
            $detailArticle = new Article($row['ma_bviet'], $row['tieude'], $row['ten_bhat'], $row['ten_tloai'], $row['tomtat'], $row['noidung'], $row['ten_tgia'], $row['ngayviet'], $row['hinhanh']);
            array_push($detailArticles, $detailArticle);
        }

        return $detailArticles;
    }
}
