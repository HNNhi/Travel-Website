<?php
class register extends connectDB {
    public function getRegister(){
        $sql="INSERT INTO `khachhang`(`id`, `tenKhacHhang`,`gioiTinh`, `namSinh`, `sdt`,`cccd/cmnd`,`email`,`tenDangNhap`,`passWord`)";
        $connect = new connectDB();
        $connect = $connect->connect();
        $result = $connect->query($sql);
        return $result;
    }
}

?>