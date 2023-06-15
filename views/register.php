<div class="register-content-items">
 <div class="register">
  <form action='register.php' method="post">
    <div class="form">
         <h1>Đăng kí tài khoản</h1>
        <div class="input">
          <label for="tenKhacHhang">Tên khách hàng</label>
          <input type="text" name="tenKhacHhang" id="tenKhacHhang">
        </div>
        <div class="input">
          <label>Giới tính</label>
          <input type="text" name="gioitinh"/>
        </div>
        <div class="input">
          <label>Năm sinh</label>
          <input type="text" name="namsinh"/>
        </div>
        <div class="input">
          <label>Số điện thoại</label>
          <input type="text" name="sdt"/>
        </div>
        <div class="input">
          <label>Email</label>
          <input type="text" name="email"/>
        </div>
        <div class="input">
          <label>Tên đăng nhập</label>
          <input type="text" name="tendangnhap"/>
        </div>
        <div class="input">
          <label>Password</label>
          <input type="passwork" name="password"/>
        </div>
        
        <div>
                <button>Đăng ký</button>
        </div>
    </div>
</div>
  </form>
  <?php
  if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
    $Tenkhachhang = htmlspecialchars($_POST["tenKhacHhang"]);
    $Gioitinh = htmlspecialchars($_POST["gioiTinh"]);
    $Namsinh = htmlspecialchars($_POST["namSinh"]);
    $Sdt = htmlspecialchars($_POST["sdt"]);
    $Email = htmlspecialchars($_POST["email"]);
    $Tendangnhap = htmlspecialchars($_POST["tenDangNhap"]);
    $Password = htmlspecialchars($_POST["passWord"]);
    $sql="INSERT INTO `khachhang`(`id`, `tenKhacHhang`,`gioiTinh`, `namSinh`, `sdt`,`cccd/cmnd`,`email`,`tenDangNhap`,`passWord`)";
    $connect = new connectDB();
    $connect = $connect->connect();
    $result = $connect->query($sql);
  
    if($result){
      echo '<script>alert("Đăng kí thành công");</script>';
    }
    else{
      echo '<script>alert("Đăng kí thất bại");</script>';
    }

  }
  ?>
</div>
