<?php
class Article {
    private $ma_bviet, $tieude, $ten_bhat, $ten_tloai, $tomtat, $noidung, $ten_tgia, $ngayviet, $hinhanh;

    public function __construct($ma_bviet, $tieude, $ten_bhat, $ma_tloai, $tomtat, $noidung, $ma_tgia, $ngayviet, $hinhanh)
    {
        $this->ma_bviet = $ma_bviet;
        $this->tieude = $tieude;
        $this->ten_bhat = $ten_bhat;
        $this->ma_tloai = $ma_tloai;
        $this->tomtat = $tomtat;
        $this->noidung = $noidung;
        $this->ma_tgia = $ma_tgia;
        $this->ngayviet = $ngayviet;
        $this->hinhanh = $hinhanh;
    }

    public function getMaBviet(){
        return $this->ma_bviet;
    }

    public function getTieude(){
        return $this->tieude;
    }

    public function getTenBhat(){
        return $this->ten_bhat;
    }

    public function getMaTloai(){
        return $this->ma_tloai;
    }

    public function getTomtat(){
        return $this->tomtat;
    }

    public function getNoidung(){
        return $this->noidung;
    }

    public function getMaTgia(){
        return $this->ma_tgia;
    }

    public function getNgayviet(){
        return $this->ngayviet;
    }

    public function getHinhanh(){
        return $this->hinhanh;
    }
}