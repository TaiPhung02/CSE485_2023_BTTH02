<?php
include ("configs/DBConnection.php");
include ("models/Author.php");
    class AuthorService{

        public function getAllAuthors(){
            $dbConn = new DbConnection();
            $conn = $dbConn->getConnection();
            
            $sql = "SELECT * FROM tacgia";
            $stmt = $conn->query($sql);

            $authors = [];
            while ($row = $stmt->fetch()){
                $author = new Author($row['ma_tgia'],$row['ten_tgia']);
                array_push($authors,$author);
            }         
            return $authors;
        }
        public function addAuthor($name){
  
            $dbConn = new DBConnection();
            $conn = $dbConn->getConnection();
     
             $sql_add = "INSERT INTO `tacgia`(`ten_tgia`) VALUES ('" . $name . "')";
             $stmt_add = $conn->query($sql_add);
     
             $sql_select = "SELECT * FROM tacgia";
             $stmt_select = $conn->query($sql_select);
     
             $authors = [];
             while($row = $stmt_select->fetch()){
                 $author= new Author( $row['ma_tgia'], $row['ten_tgia']);
                 array_push($authors,$author);
             }
     
             return $authors;
         }
         public function get_id_Author($id)
         {
             $dbConn = new DbConnection();
             $conn = $dbConn->getConnection();
     
             $sql = "SELECT * FROM tacgia WHERE ma_tgia = '" . $id . "'";
             $stmt = $conn->query($sql);
     
             $authors = [];
             while ($row = $stmt->fetch()) {
                 $author = new Author($row['ma_tgia'], $row['ten_tgia']);
                 array_push($authors, $author);
             }
             return $authors;
         }
         public function updateAuthor($id,$name){
            $dbConn = new DBConnection();
            $conn = $dbConn->getConnection();
    
    
            $sql_update = "UPDATE `tacgia` SET `ten_tgia`='" . $name . "' WHERE `ma_tgia` = '" . $id . "'";
            $stmt_update = $conn->query($sql_update);
    
            $sql_select = "SELECT * FROM tacgia";
            $stmt_select = $conn->query($sql_select);
    
        
            $authors = [];
            while($row = $stmt_select->fetch()){
                $author = new Author( $row['ma_tgia'], $row['ten_tgia']);
                array_push($authors,$author);
            }
    
            return $authors;
        }     
    }