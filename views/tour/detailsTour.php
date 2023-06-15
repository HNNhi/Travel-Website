<div class="details-Tour">
    <div class="details-item">
        <h2>Chi tiết Tour</h2>
       <?php while ($row = $details->fetch_assoc()){ ?>
            <div class="img-details-Tour">
                <img src="/images/hinhanh_tour/<?php echo $row["hinhAnh"] ?>" alt="hình ảnh tour">
                <div class="content-details-Tour">
                    <div class="name-details-tour">
                       <h1>
                         <?php echo $name = "Tour " . $row["tenDiaDiem"] . " - " . $row["tenDiaDanh"]  ." ". $row["thoiHan"]; ?>
                       </h1>
                   </div>
    
                   <div class="price-details-tour">
                      <span>Giá:<?php echo number_format((int)$row["donGia"]) ?>đ</span>
                    </div>
    
                    <div class="order-details-tour">
                        <button>Đặt tour ngay</button>
                    </div>
                    <img src="/images/tour/<?php echo $row["hinhanh"] ?>" alt="hình ảnh địa danh">
                </div>
            </div>
            <div class="share-details-Tour">
                <ul>
                    <li> <?php echo $name = "Địa điểm:" . $row["moTa"] ?></li>
                    <li> <?php echo $name = "Cách di chuyển:" . $row["mota"] ?></li>
                </ul>
            </div>

               

        <?php } ?>
    </div>
</div>