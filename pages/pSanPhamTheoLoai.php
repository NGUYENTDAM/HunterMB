<div class="content">
    <div class="container">
        <div class="content-mid">
            <h3>Sản Phẩm Theo Loại</h3>
            <label class="line"></label>
            <div style="height: 30px"></div>
            <?php
            if (isset($_GET["id"]))
                $id = $_GET["id"];
            else
                DataProvider::ChangeURL("index.php?a=404");

            $sql = "SELECT * FROM SanPham WHERE BiXoa = 0 AND MaLoaiSanPham = $id";
            $result = DataProvider::ExecuteQuery($sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-3 item-grid simpleCart_shelfItem">
                    <div class=" mid-pop">
                        <div class="pro-img"> <img class="img-responsive" src="images/<?php echo $row["HinhURL"]; ?>" />
                        </div>
                        <div class="mid-1">
                            <div class="phone">
                                <div class="phone-top"> <?php echo $row["TenSanPham"]; ?>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="mid-2">
                                Giá: <?php echo $row["GiaSanPham"]; ?>đ
                                <a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>&idType=<?=$row["MaLoaiSanPham"]?>">Chi Tiết</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }

            ?>
        </div>
    </div>
</div>