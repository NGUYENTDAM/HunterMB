<button type="button" class="btn btn-success" onclick="window.location.href='index.php?c=2&a=3'" style="margin-top:10px;margin-bottom:20px;margin-left:0.7%">Thêm sản phẩm</button>

<table class="tb-qlsp" cellspacing="0" border="1">
    <tr>
        <th width="100" class="text-center"">STT</th>
       <th width=" 300" class="text-center">Tên sản phẩm</th>
        <th width="200" class="text-center">Hình</th>
        <th width="200" class="text-center">Giá</th>
        <th width="200" class="text-center">Ngày nhập</th>
        <th width="200" class="text-center">Số lượng tồn</th>
        <th width="200" class="text-center">Số lượng bán</th>
        <th width="200" class="text-center">Số lược xem</th>
        <th width="200" class="text-center">Loại</th>
        <th width="200" class="text-center">Hãng</th>
        <th width="800" class="text-center">Mô tả</th>
        <th width="200" class="text-center">Trạng thái</th>
        <th width="600" class="text-center">Thao tác</th>
    </tr>
    <?php
    $sql = "SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon, s.SoLuongBan, s.SoLuocXem, s.MoTa, s.BiXoa,
       l.TenLoaiSanPham , h.TenHangSanXuat FROM SanPham s, LoaiSanPham l, HangSanXuat h 
              WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat ORDER BY s.MaSanPham DESC";
    $result = DataProvider::ExecuteQuery($sql);
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
    ?>

        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["TenSanPham"]; ?></td>
            <td><img width=100% src="../images/<?php echo $row["HinhURL"]; ?>" /></td>
            <td><?php echo $row["GiaSanPham"]; ?></td>
            <td><?php echo $row["NgayNhap"]; ?></td>
            <td><?php echo $row["SoLuongTon"]; ?></td>
            <td><?php echo $row["SoLuongBan"]; ?></td>
            <td><?php echo $row["SoLuocXem"]; ?></td>
            <td><?php echo $row["TenLoaiSanPham"]; ?></td>
            <td><?php echo $row["TenHangSanXuat"]; ?></td>
            <td>
                <?php
                if (strlen($row["BiXoa"]) > 20)
                    $sMoTa = substr($row["MoTa"], 0, 20) . "...";
                else
                    $sMoTa = $row["MoTa"];
                echo $sMoTa;
                ?>
                <div class="fullMoTa">
                    <?php echo $row["MoTa"]; ?>
                </div>
            </td>
            <td>
                <?php
                if ($row["BiXoa"] == 1)
                    echo "<img src='images/locked.png' />";
                else
                    echo "<img src='images/active.png' />";
                ?>
            </td>

            <td>
                <button type="button" class="btn btn-danger" onclick="window.location.href='pages/qlSanPham/xlXoa.php?id=<?= $row['MaSanPham'] ?>'" style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá Sản Phẩm</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?c=2&a=2&id=<?= $row['MaSanPham'] ?>'" style="margin-left:10px;">Cập nhật</button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>