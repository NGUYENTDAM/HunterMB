<div id = "quanlygiohang">
    <h2 style="text-align:center">Quản Lý Giỏ Hàng</h2>
    <label class="line"></label>
    <table>
    <tr>
        <th width="20">STT</th>
        <th>Tên Sản Phẩm</th>
        <th width="60">Hình</th>
        <th width="50">Giá</th>
        <th width="50">Số Lượng</th>
        <th width="50">Thao Tác</th>
    </tr>
    <?php
        $tongGia = 0;
        if(isset($_SESSION["GioHang"]))
        {
            $soSanPham = count($gioHang->listProduct);
            for($i = 0; $i < $soSanPham; $i++){
                $id = $gioHang->listProduct[$i]->id;
                $sql = "SELECT * FROM SanPham WHERE MaSanPham = $id";
                $result = DataProvider::ExecuteQuery($sql);
                $row = mysqli_fetch_array($result);
                ?>
                <form name="fmGioHang" action="pages/GioHang/xlCapNhatGioHang.php" method = "post">
                    <tr>
                        <td><?php echo $i+1 ?></td>
                        <td>
                        <span>
                            <?php echo $row["TenSanPham"]?></span>
                        </td>
                        <td align="center">
                            <img src="images/<?php echo $row["HinhURL"]; ?>" width="50" alt="">
                        </td>
                        <td>
                            <?php echo $row["GiaSanPham"]?>
                        </td>
                        <td>
                            <input type="text" name="txtSL" value="<?php echo $gioHang->listProduct[$i]->num;?>" width="45" size="5">
                            <input type="hidden" name="dhID" value="<?php echo $gioHang->listProduct[$i]->id;?>">
                        </td>
                        <td>
                            <input type="submit" value="Cập Nhật Số Lượng" name="capnhat">
                        </td>
                    </tr>
                </form>

                <?php
                $tongGia += $row["GiaSanPham"] * $gioHang->listProduct[$i]->num;
            }
        }
        $_SESSION["TongGia"] = $tongGia;
    ?>
    </table>
    <div class="pprice">
        Tổng thành tiền: <?php echo $tongGia;?> đ
    </div>
    <a href="pages/GioHang/xlDatHang.php">  
        <img src="images/dathang.png" width="100" alt="">
    </a>
</div>