<div class="container-danhmuc">
    <div class="danhmuc">
        <ul>
            <li><a href="?page=tour">Tất cả</a></li>
            <?php while ($row = $danhmuc->fetch_assoc()){ ?>
            <li><a href="?page=tour&action=theloai&maTheLoai=<?php echo $row["matheloai"] ?>"><?php echo $row["tentheloai"] ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>