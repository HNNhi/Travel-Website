<div class="container-danhmuc">
    <div class="danhmuc">
        <ul>
            <li><a href="?page=tour">Tất cả</a></li>
            <?php while ($row = $danhmuc->fetch_assoc()){ ?>
            <li><a href="?page=tour&action=theloai&idTheLoai=<?php echo $row["idTheLoai"] ?>"><?php echo $row["tenTheLoai"] ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>