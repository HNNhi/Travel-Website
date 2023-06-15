<?php 
class tour extends connectDB {
    public function getTour(){
        $sql = "SELECT * FROM tour JOIN diadiem ON tour.idDiaDiemDen = diadiem.id
        JOIN diadanh ON tour.idDiaDiemDen = diadanh.id
        JOIN lichtrinh ON tour.maLichTrinh = lichtrinh.id";
        $result = $this->connect()->query($sql);
        return $result;
    }
    
    public function getDanhMuc(){
        $sql = "SELECT * FROM theloai";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getTheLoai(){
        $idDanhMuc = $_GET["idTheLoai"];
        $sql = "SELECT * FROM tour JOIN diadiem ON tour.idDiaDiemDen = diadiem.id
        JOIN diadanh ON tour.idDiaDiemDen = diadanh.id
        JOIN lichtrinh ON tour.maLichTrinh = lichtrinh.id WHERE matheloai = $idDanhMuc";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getChiTiet(){
        $sql = "SELECT * FROM tour
        JOIN diadiem ON tour.idDiaDiemDen = diadiem.id
        JOIN diadanh ON tour.idDiaDiemDen = diadanh.id
        JOIN lichtrinh ON tour.maLichTrinh = lichtrinh.id 
        WHERE tour.id =".$_GET['id'];
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getTimKiem(){
        $sql = "SELECT * FROM diadiem
        JOIN diadanh ON diadiem.id = diadanh.idDiaDiem
        JOIN tour ON diadiem.id = tour.idDiaDiemDen
        JOIN lichtrinh ON tour.maLichTrinh = lichtrinh.id
        WHERE diadiem.tenDiaDiem LIKE '%địa điểm cần tìm kiếm%' ";
        $result = $this->connect()->query($sql);
        return $result;
    }
}
?>