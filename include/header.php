<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour du lịch</title>
    <?php require_once "configs/scripts.php";?>
  </head>
  <body>
    <header>
      <div class="contaier-header">
        <img id="logo" src="/images/logo0.jpg" alt="#" />
        <div class="search">
          <div class="search-content-items row">
            <form action="" method="get">
              <div>
                <input type="text" placeholder="Bạn muốn đi đâu?" />
              </div>
              <div>
                <input type="text" placeholder="Địa điểm" />
              </div>
              <div>
                <input type="text" placeholder="Số lượng người đi" />
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
        <li><a href="?page=login">Tài khoản</a></li>
        <li><a href="?page=register">Đăng ký</a></li>
        <li><a href="?page=cart">Giỏ hàng</a></li>
        <li><a href="?page=contact">Liên hệ</a></li>
    </ul>
    <div id="form">
        <form method="get" action="results.php" enctype="multipart/form-data">
            <input type="text" name="user_query" placeholder="Search all">
            <input id="search" type="submit" name="search" value="Search">
        </form>
    </div>
</div>

    </header>
    <main>
