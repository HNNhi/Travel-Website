<?php
session_start();
require_once "configs/config.php";
require_once __DIR__ . "/include/header.php";
require_once __DIR__ . "/controllers/connectDB.php";
if(isset($_GET["page"])){
    switch($_GET["page"]){
        case "tour":
            require_once __DIR__ . "/controllers/tour.php";
            $tour = new tour();
            $listTour = $tour->getTour();
            $danhmuc = $tour->getDanhMuc();
            echo '<section><div class="container-tour">';
            require_once __DIR__ . "/views/tour/danhmuc.php";
            // kiểm tra action có tồn tại hay không nếu có thì chuyển hướng đến trang tương ứng
            if(isset($_GET["action"])){
                switch($_GET["action"]){
                    case "detail":
                        $details = $tour->getChiTiet();
                        require_once __DIR__ . "/views/tour/detailsTour.php";
                        break;
                    case "list":
                        require_once __DIR__ . "/views/tour/listTour.php";
                        break;
                    case "search":
                        $search = $tour->getTimKiem();
                        require_once __DIR__ . "/views/tour/searchTour.php";
                        break;
                    case "theloai":
                        // lấy mã thể loại từ biến GET
                        $theloai = $tour->getTheLoai();
                        require_once __DIR__ . "/views/tour/theloaiTour.php";
                        break;
                    default:
                        require_once __DIR__ . "/views/tour/listTour.php";
                        break;
                }
            }else{
                require_once __DIR__ . "/views/tour/listTour.php";
            }
            
            echo '</div></section>';
            break;

        case "register":
            require_once __DIR__ . "/views/register.php";
            



    }
}
require_once __DIR__ . "/include/footer.php";

?>