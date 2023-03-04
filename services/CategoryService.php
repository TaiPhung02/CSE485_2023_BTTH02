<?php
include("configs/DBConnection.php");
include("models/Category.php");
class CategoryService
{

    public function getAllCategory()
    {
        $dbConn = new DbConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai";
        $stmt = $conn->query($sql);

        $categories = [];
        while ($row = $stmt->fetch()) {
            $category = new Category($row['ma_tloai'], $row['ten_tloai']);
            array_push($categories, $category);
        }
        return $categories;
    }


    public function get_id_Category($id)
    {
        $dbConn = new DbConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai WHERE ma_tloai = '" . $id . "'";
        $stmt = $conn->query($sql);

        $categories = [];
        while ($row = $stmt->fetch()) {
            $category = new Category($row['ma_tloai'], $row['ten_tloai']);
            array_push($categories, $category);
        }
        return $categories;
    }


    public function updateCategory($id,$name){

        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();


        $sql_update = "UPDATE `theloai` SET `ten_tloai`='" . $name . "' WHERE `ma_tloai` = '" . $id . "'";
        $stmt_update = $conn->query($sql_update);

        $sql_select = "SELECT * FROM theloai";
        $stmt_select = $conn->query($sql_select);

    
        $categories = [];
        while($row = $stmt_select->fetch()){
            $category = new Category( $row['ma_tloai'], $row['ten_tloai']);
            array_push($categories,$category);
        }

        return $categories;
    }

    public function storeCategory($name){
  
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        $sql_store = "INSERT INTO `theloai`(`ten_tloai`) VALUES ('" . $name . "')";
        $stmt_store = $conn->query($sql_store);

        $sql_select = "SELECT * FROM theloai";
        $stmt_select = $conn->query($sql_select);

        $categories = [];
        while($row = $stmt_select->fetch()){
            $category = new Category( $row['ma_tloai'], $row['ten_tloai']);
            array_push($categories,$category);
        }

        return $categories;
    }
}