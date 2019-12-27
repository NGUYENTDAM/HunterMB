<button type="button" class="btn btn-success" onclick="window.location.href='index.php?c=4&a=3'" style="margin-left:24%;margin-top:10px;margin-bottom:10px">Thêm hãng sản xuất</button>

<table class="tb-qlds" cellspacing="0" border="1">
    <tr>
        <th width="70" class="text-center">STT</th>
        <th width="170" class="text-center"> Tên hãng sản xuất</th>
        <th width="100" class="text-center">Tình trạng</th>
        <th width="350" class="text-center">Thao tác</th>

    </tr>
    <?php
    $sql = "SELECT * FROM HangSanXuat";
    $result = DataProvider::ExecuteQuery($sql);
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["TenHangSanXuat"]; ?></td>

            <td>
                <?php
                if ($row["BiXoa"] == 1)
                    echo "<img src='images/locked.png' />";
                else
                    echo "<img src='images/active.png' />";
                ?>
            </td>

            <td>
                <button type="button" class="btn btn-danger" onclick="window.location.href='pages/qlHang/xlXoa.php?id=<?= $row['MaHangSanXuat'] ?>'" style="margin-left:15px;margin-top:5px;margin-bottom:5px">Xoá Hãng Sản Phẩm</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?c=4&a=2&id=<?= $row['MaHangSanXuat'] ?>'" style="margin-left:10px;">Cập nhật</button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>