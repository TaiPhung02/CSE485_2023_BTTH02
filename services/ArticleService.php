<?php
require_once ("configs/DBConnection.php");
include_once ("models/Article.php");
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
            $article = new Article($row['ma_bviet'], $row['tieude'], $row['ten_bhat'], $row['ten_tloai'], $row['tomtat'], $row['noidung'], $row['ten_tgia'], $row['ngayviet'], $row['hinhanh']);
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
   
    public function addArticle($tieuDe, $baiHat, $maTloai, $tomTat, $noiDung, $maTgia, $ngayViet, $hinhAnh){
  
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        

        $sql_add = "INSERT INTO `baiviet`(`tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) 
        VALUES ('$tieuDe','$baiHat','$maTloai','$tomTat','$noiDung','$maTgia',CURDATE(),'$hinhAnh')";
        $stmt_add = $conn->query($sql_add);
    }

    // ======= edit
    public function get_id_Article($id)
    {
        $dbConn = new DbConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT baiviet.*,theloai.ten_tloai, tacgia.ten_tgia 
                FROM baiviet, theloai, tacgia 
                WHERE baiviet.ma_tgia = tacgia.ma_tgia AND baiviet.ma_tloai = theloai.ma_tloai AND baiviet.ma_bviet = $id;";
        $stmt = $conn->query($sql);

        $articles = [];
        while ($row = $stmt->fetch()) {

            $arr = [
                'ma_bviet' => $row['ma_bviet'],
                'tieude' => $row['tieude'],
                'ten_bhat' => $row['ten_bhat'],
                'ma_tloai' => $row['ma_tloai'],
                'tomtat' => $row['tomtat'],
                'noidung' => $row['noidung'],
                'ma_tgia' => $row['ma_tgia'],
                'hinhanh' => $row['hinhanh'],
                'ten_tgia' => $row['ten_tgia'],
                'ngayviet' => $row['ngayviet'],
                'ten_tloai' => $row['ten_tloai']

            ];
            array_push($articles, $arr);
        }
        return $articles;
    }

    public function updateArticle($id, $tieuDe, $baiHat, $maTloai, $tomTat, $noiDung, $maTgia, $ngayViet, $hinhAnh){

        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();


        $sql_update = "UPDATE `baiviet` SET `tieude` = '$tieuDe', `ten_bhat` = '$baiHat', `ma_tloai` = '$maTloai' , `tomtat` = '$tomTat',
        `noidung` = '$noiDung' , `ma_tgia` = '$maTgia' , `ngayviet` = CURDATE() , `hinhanh` = '$hinhAnh' WHERE `ma_bviet` = '$id' ";
        $stmt_update = $conn->query($sql_update);
    }

    public function deleteArticle($id){
  
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
 
        $sql_delete = "DELETE FROM `baiviet` WHERE `ma_bviet` = '" . $id . "'";
        $stmt_delete = $conn->query($sql_delete);
 
        $sql_select = "SELECT * FROM baiviet";
        $stmt_select = $conn->query($sql_select);
 
        $articles = [];
        while($row = $stmt_select->fetch()){
            $article = new Article($row['ma_bviet'], $row['tieude'], $row['ten_bhat'], $row['ma_tloai'], $row['tomtat'], $row['noidung'], $row['ma_tgia'], $row['ngayviet'], $row['hinhanh']);
            array_push($articles,$article);
        }
 
        return $articles;
    }
}
