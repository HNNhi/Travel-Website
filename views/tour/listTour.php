<div class="container-listTour">
    <div class="list-tour">
        <?php while ($row = $listTour->fetch_assoc()){ ?>
        <div class="item">
            <div class="inner-item">
                <div class="img-tour">
                    <img src="/images/hinhanh_tour/<?php echo $row["hinhanh"] ?>" alt="hình ảnh tour">
                </div>
                <div class="name-tour">
                    <h3>
                        <a href="?page=tour&action=detail&id=1002"><?php echo $row["tentour"] ?></a>
                    </h3>
                </div>
                <div class="price-tour">
                    <span>Giá: <?php echo number_format((int)$row["dongia"]) ?>đ</span>
                </div>
                <div class="order-tour">
                    <button>Đặt tour ngay</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>