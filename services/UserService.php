<?php
require_once("configs/DBConnection.php");
include("models/User.php");
class UserService
{

    public function getAllUser()
    {
        $dbConn = new DbConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM users";
        $stmt = $conn->query($sql);

        $users = [];
        while ($row = $stmt->fetch()) {
            $user = new Category($row['id_nguoidung'], $row['tai_khoan'], $row['mat_khau'],$row['quyen']);
            array_push($users, $user);
        }
        return $users;
    }
}