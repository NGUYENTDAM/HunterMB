<form action="pages/qlTaiKhoan/xlCapNhat.php" method="get">
    <fieldset  class="flt">
         <legend class="sp1">Cập nhập thông tin tài khoản</legend>
         <?php
           if(isset($_GET["id"]))
           {
               $id = $_GET["id"];
               $sql = "SELECT TenDangNhap, MaLoaiTaiKhoan FROM TaiKhoan WHERE MaTaiKhoan = $id";
               $result = DataProvider::ExecuteQuery($sql);
               $row = mysqli_fetch_array($result);
               $TenDangNhap = $row["TenDangNhap"];
               $MaLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];

           }
        ?>
        <div class="sp1">
           <span>Tên đăng nhập:</span>
           <?php echo $TenDangNhap; ?>
        </div>
        <div class="sp1">
           <span>Loại tài khoản:</span>
           <select name="cmbLoaiTaiKhoan">
              <?php
                  $sql = "SELECT *FROM LoaiTaiKhoan";
                  $result = DataProvider::ExecuteQuery($sql);
                  while($row = mysqli_fetch_array($result))
                  {
                      if($row["MaLoaiTaiKhoan"] == $MaLoaiTaiKhoan)
                        echo "<option value='".$row["MaLoaiTaiKhoan"]."' selected>".$row["TenLoaiTaiKhoan"]."</option>";
                        else   
                        echo "<option value='".$row["MaLoaiTaiKhoan"]."'>".$row["TenLoaiTaiKhoan"]."</option>";
                  }
              ?>
            </select>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            </div>
            <div class="sp1">
                <input class="sbm" type="submit" value="Cập nhật" />
            </div>
        </fieldset>
</form>
