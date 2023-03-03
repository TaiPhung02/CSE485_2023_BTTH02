<?php
include ("configs/DBConnection.php");
include ("models/Article.php");
    class AuthorService{

        public function getAllAuthors(){
            $dbConn = new DbConnection();
            $conn = $dbConn->getConnection();
            
            $sql = "SELECT * 
            FROM tacgia";
            $stmt = $conn->query($sql);

            $authors = [];
            while ($row = $stmt->fetch()){
                $author = new Author($row['ma_tgia'],$row['ten_tgia'],$row['hinh_tgia']);
                array_push($authors,$author);
            }         
            return $authors;
        }
    }