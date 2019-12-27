<?php
if (isset($_GET["id"]))
    $id = $_GET["id"];
else
    DataProvider::ChangeURL("index.php?a=404");
$sql = "SELECT s.MaSanPham, s.TenSanPham, s.GiaSanPham, s.SoLuongTon, s.SoLuocXem, s.MoTa,s.HinhURL, h.TenHangSanXuat, l.TenLoaiSanPham FROM SanPham s, HangSanXuat h, LoaiSanPham l WHERE s.BiXoa = 0 AND s.MaHangSanXuat = h.MaHangSanXuat AND s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaSanPham = $id";
$result = DataProvider::ExecuteQuery($sql);
$row = mysqli_fetch_array($result);
if ($row == null)
    DataProvider::ChangeURL("index.php?a=404");
?>
<h1><?= $row["TenSanPham"]; ?></h1>

<div id="chitietsp">
    <div id="chitietleft">
        <img src="images/<?php echo $row["HinhURL"]; ?>">
        <div id="mota">
            <?= $row["MoTa"];
            ?>
        </div>
    </div>
    <div id="chitietright">
        <div>
            <span class="productname"><?= $row["TenSanPham"]; ?></span>
        </div>
        <hr />
        <div>
            <span>Giá:</span>
            <span class="price"><?= $row["GiaSanPham"]; ?>đ</span>
        </div>
        <hr />
        <div>
            <span>Hãng sản xuất : </span>
            <span class="factory"><?= $row["TenHangSanXuat"]; ?></span>
        </div>
        <hr />
        <div>
            <span>Loại sản phẩm : </span>
            <span class="data"><?= $row["TenLoaiSanPham"]; ?></span>
        </div>
        <hr />
        <div>
            <span>Số lượng : </span>
            <span class="data"><?= $row["SoLuongTon"]; ?> sản phẩm</span>
        </div>
        <hr />
        <div>
            <span>Số lược xem : </span>
            <span class="data"><?= $row["SoLuocXem"]; ?> lượt</span>
        </div>
        <hr />
        <div class="giohang">
            <?php
            if (isset($_SESSION["MaLoaiTaiKhoan"])) {
            ?>
                <a href="index.php?a=7&id=<?php echo $row["MaSanPham"]; ?>">
                    <img src="img/ca.png" width="32">
                    <a class="data" href="index.php?a=7&id=<?php echo $row["MaSanPham"]; ?>">Mua ngay</a>
                </a>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php
$SoLuocXem = $row["SoLuocXem"] + 1;
$sql = "UPDATE SanPham SET SoLuocXem = $SoLuocXem
            WHERE MaSanPham = $id";
DataProvider::ExecuteQuery($sql);
?>
<br>
<br>

<div class="container">
    <div class="content-mid">
        <div style="margin-top: 5%"></div>
        <hr>
        <h3>Sản phẩm cùng loại</h3>
        <?php
        // nếu mà có biến idType thì ta sẽ
        if (isset($_GET["idType"])) {
            $idType = $_GET["idType"];
            // viết câu truy vấn 
            $sql = "SELECT *FROM SanPham where MaLoaiSanPham=$idType AND BiXoa=0 LIMIT 5";
            $result = DataProvider::ExecuteQuery($sql);
            //duyệt hết dữ liệu và thêm vào khi lấy từ db ra
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
                                <a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>&idType=<?= $row["MaLoaiSanPham"] ?>">Chi Tiết</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php

            }
        }
        ?>
    </div>
</div>