<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour du lịch</title>
    <?php require_once "configs/scripts.php";?>
    <link rel="stylesheet" href="/css/register.css">
  </head>
  <body>
    <header>
      <div class="contaier-header">
        <img id="logo" src="/images/logo1.jpg" alt="#" />
        <div class="search">
          <div class="search-content-items row">
            <form action="" method="get">
              <div>
                <input type="text" placeholder="Nhập địa điểm đi" />
              </div>
              <div>
                <input type="text" placeholder="Nhập thời hạn đi" />
              </div>
              <div>
                <input type="text" placeholder="Nhập ngày đi" />
              </div>
              <div>
                <button>Tìm kiếm</button>
              </div>
            </form>
          </div>
        </div>
      </div>
<div class="menubar">
    <ul id="menu">
        <li><a href="/">Trang chủ</a></li>
        <li><a href="?page=tour">Tours</a></li>
        <li><a href="?page=cart">Giỏ hàng</a></li>
        <li><a href="?page=register">Đăng nhập</a></li>
        <li><a href="?page=register">Đăng ký</a></li>
        <li><a href="?page=contact">Liên hệ</a></li>
    </ul>
    
</div>

    </header>
    <main>