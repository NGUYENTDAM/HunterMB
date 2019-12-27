<button type="button" class="btn btn-success" onclick="window.location.href='index.php?c=5&a=3'" style="margin-left:21%;margin-top:10px;margin-bottom:10px">Thêm đơn đặt hàng</button>

<table class="tb-qlddh" cellspacing="0" border="1">
    <tr>
        <th width="100" class="text-center">STT</th>
        <th width="150" class="text-center">Mã đơn đặt hàng</th>
        <th width="100" class="text-center">Ngày lập</th>
        <th width="200" class="text-center">Khách hàng</th>
        <th width="100" class="text-center">Tình trạng</th>
        <th width="100" class="text-center">Thao tác</th>
    </tr>
    <?php
    $sql = "SELECT  d.MaDonDatHang, d.NgayLap, d.MaTinhTrang, t.TenHienThi, tt.TenTinhTrang FROM TaiKhoan t, DonDatHang d, TinhTrang tt 
              WHERE d.MaTaiKhoan = t.MaTaiKhoan AND d.MaTinhTrang = tt.MaTinhTrang ORDER BY d.MaTinhTrang, d.NgayLap";
    $result = DataProvider::ExecuteQuery($sql);
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
        $c = "";
        switch ($row["MaTinhTrang"]) {
            case 2:
                $c = "classGiaoHang";
                break;
            case 3:
                $c = "classThanhToan";
                break;
            case 4:
                $c = "classHuy";
                break;
        }
    ?>
        <tr class="<?php echo $c; ?>">
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["MaDonDatHang"]; ?></td>
            <td><?php echo $row["NgayLap"]; ?></td>
            <td><?php echo $row["TenHienThi"]; ?></td>
            <td><?php echo $row["TenTinhTrang"]; ?></td>
            <td>
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?c=5&a=2&id=<?= $row['MaDonDatHang'] ?>'" style="margin-left:10px;">Chi Tiết</button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>