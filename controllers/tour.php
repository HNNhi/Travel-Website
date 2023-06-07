<?php 
class tour extends connectDB {
    public function getTour(){
        $sql = "SELECT * FROM tour";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getDanhMuc(){
        $sql = "SELECT * FROM theloai";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getTheLoai(){
        $idDanhMuc = $_GET["maTheLoai"];
        $sql = "SELECT * FROM tour WHERE matheloai = $idDanhMuc";
        $result = $this->connect()->query($sql);
        return $result;
    }
}
?>