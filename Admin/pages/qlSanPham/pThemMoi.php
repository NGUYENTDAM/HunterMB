<form action="pages/qlSanPham/xlThemMoi.php" method="get" onsubmit="return KiemTra();" enctype="multipart/form-data">
    <fieldset class="flt">
        <legend style="margin-left: 1%">Thêm sản phẩm mới</legend>
        <div class="sp1">
            <span>Tên sản phẩm:</span>
            <input class="ipt" type="text" name="txtTen" id="txtTen" />
            <i id="errTen"></i>
        </div>
        <div class="sp1">
            <span>Hãng sản xuất</span>
            <select class="ipt" name="cbHang">
                <?php
                $sql = "SELECT *FROM HangSanXuat WHERE BiXoa=0";
                $result = DataProvider::ExecuteQuery($sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <option value="<?php echo $row["MaHangSanXuat"]; ?>"><?php echo $row["TenHangSanXuat"]; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="sp1">
            <span>Hình</span>
            <input class="iptg" type="file" name="fHinh" />
        </div>
        <div class="sp1">
            <span>Giá</span>
            <input class="ipt" type="text" name="txtGia" id="txtGia" />

        </div>
        <div class="sp1">
            <span>Số lượng tồn</span>
            <input class="ipt" type="text" name="txtTon" id="txtTon" />

        </div>
        <div class="sp1">
            <span>Mô tả</span>
            <textarea class="ipt" name="txtMoTa"></textarea>
        </div>
        <div class="sp1">
            <span>Loại sản phẩm :</span>
            <input class="ipt" type="text" name="txtLoai" id="txtLoai" />
        </div>
        <div class="sp1">
            <span>Hãng sản xuất :</span>
            <input class="ipt" type="text" name="txtHang" id="txtHang" />
        </div>
        <div class="sp1">
            <span>Xuất xứ :</span>
            <input class="ipt" type="text" name="txtXx" id="txtXx" />
        </div>
        <div class="sp1">
            <span>Nhà sản xuất :</span>
            <input class="ipt" type="text" name="txtNsx" id="txtNsx" />
        </div>
        <div class="sp1">
            <input class="ipt2" type="submit" value="Thêm mới" />
            <div>
    </fieldset>
</form>
<script type="text/javascript">
    function KiemTra() {
        var ten = document.getElementById("txtTen");
        var err = document.getElementById("error");
        if (ten.value == "") {
            err.innerHTML = "Tên sản phẩm không được rỗng";
            ten.focus();
            return false;
        } else
            err.innerHTML = "";

        var ten = document.getElementById("txtGia");
        var err = document.getElementById("errGia");
        if (ten.value == "") {
            err.innerHTML = "Giá sản phẩm không được rỗng";
            ten.focus();
            return false;
        } else
            err.innerHTML = "";

        var ten = document.getElementById("txtTon");
        var err = document.getElementById("errTon");
        if (ten.value == "") {
            err.innerHTML = "Số lượng tồn không được rỗng";
            ten.focus();
            return false;
        } else
            err.innerHTML = "";

        return true;
    }
</script>