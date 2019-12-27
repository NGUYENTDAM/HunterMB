<button type="button" class="btn btn-success" onclick="window.location.href='index.php?c=3&a=3'" style="margin-left:25%;margin-top:10px;margin-bottom:10px">Thêm loại sản phẩm</button>

<table class="tb-qll" cellspacing="0" border="1">
    <tr>
        <th width="100" class="text-center"> Mã loại</th>
        <th width="200" class="text-center"> Tên loại</th>
        <th width="75" class="text-center"> Tình trạng</th>
        <th width="350" class="text-center"> Thao tác</th>
    </tr>
    <?php
    $sql = "SELECT MaLoaiSanPham,TenLoaiSanPham,BiXoa FROM LoaiSanPham";
    $result = DataProvider::ExecuteQuery($sql);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $row["MaLoaiSanPham"]; ?></td>
            <td><?php echo $row["TenLoaiSanPham"]; ?></td>
            <td>
                <?php
                if ($row["BiXoa"] == 1)
                    echo "<img src='images/locked.png' />";
                else
                    echo "<img src='images/active.png' />";
                ?>
            </td>
            <td>
                <button type="button" class="btn btn-danger" onclick="window.location.href='pages/qlLoai/xlXoa.php?id=<?= $row['MaLoaiSanPham'] ?>'" style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá Loại Sản Phẩm</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?c=3&a=2&id=<?= $row['MaLoaiSanPham'] ?>'" style="margin-left:10px;">Cập nhật</button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>