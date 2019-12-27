<button type="button" class="btn btn-success" onclick="window.location.href='index.php?c=1&a=3'" style="margin-left:13%;margin-top:10px;margin-bottom:-10px">Thêm tài khoản</button>

<!-- <div class="col-md-3 col-sm-4 col-sx-6" style="float: right;">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Tìm kiếm tài khoản... " style="width:83%;">
        <div class="input-group-append">
            <button class="btn btn-warning Search" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</div> -->

<table cellspacing="0" border="1" class="table-hover table-striped" style="margin-top:2%;margin-left:13%">
    <tr>
        <th width="100" class="text-center"> Mã tài khoản</th>
        <th width="200" class="text-center"> Tên đăng nhập</th>
        <th width="200" class="text-center"> Tên hiển thị</th>
        <th width="105" class="text-center"> Tình trạng</th>
        <th width="150" class="text-center"> Loại tài khoản</th>
        <th width="250" class="text-center"> Thao tác</th>
    </tr>
    <?php
    $sql = "SELECT t.MaTaiKhoan, t.TenDangNhap, t.TenHienThi, t.DienThoai, t.Email, t.BiXoa, l.TenLoaiTaiKhoan FROM TaiKhoan t, LoaiTaiKHoan l 
              WHERE t.MaLoaiTaiKhoan = l.MaLoaiTaiKhoan";
    $result = DataProvider::ExecuteQuery($sql);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $row["MaTaiKhoan"]; ?></td>
            <td><?php echo $row["TenDangNhap"]; ?></td>
            <td><?php echo $row["TenHienThi"]; ?></td>


            <td>
                <?php
                if ($row["BiXoa"] == 1)
                    echo "<img src='images/locked.png' />";
                else
                    echo "<img src='images/active.png' />";
                ?>
            </td>
            <td><?php echo $row["TenLoaiTaiKhoan"]; ?></td>
            <td>

                <button type="button" class="btn btn-danger" onclick="window.location.href='pages/qlTaiKhoan/xlXoa.php?id=<?= $row['MaTaiKhoan'] ?>'" style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá tài khoản</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?c=1&a=2&id=<?= $row['MaTaiKhoan'] ?>'" style="margin-left:10px;">Cập nhật</button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>