<?php
class User {
    private $idnguoidung;
    private $taikhoan;
    private $matkhau;
    private $quyen;

    public function __construct($idnguoidung, $taikhoan,$matkhau,$quyen) {
        $this->idnguoidung = $idnguoidung;
        $this->taikhoan = $taikhoan;
        $this->matkhau = $matkhau;
        $this->quyen = $quyen;
    }
    public function getIdUser(){
        return $this->idnguoidung;
    }
    public function getTkUser(){
        return $this->taikhoan;
    }
    public function getMkUser(){
        return $this->matkhau;
    }
    public function getQuyenUser(){
        return $this->quyen;
    }    
}