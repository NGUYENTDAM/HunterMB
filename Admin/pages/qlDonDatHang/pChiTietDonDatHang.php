<?php
   if(!isset($_GET["id"]))
      DataProvider::ChangeURL("index.php?c=404");

    $id = $_GET["id"];
    $sql = "SELECT  d.MaDonDatHang, d.NgayLap, d.TongThanhTien, t.TenHienThi, t.DienThoai, tt.MaTinhTrang, tt.TenTinhTrang FROM TaiKhoan t, DonDatHang d, TinhTrang tt 
              WHERE d.MaTaiKhoan = t.MaTaiKhoan AND d.MaTinhTrang = tt.MaTinhTrang AND MaDonDatHang = $id";
             $result = DataProvider::ExecuteQuery($sql);
             $row = mysqli_fetch_array($result);
?>
<fieldset class="flt">
     <legend class="sp1">Thông tin đơn đặt hàng</legend>
     <div class="sp1">
          <span>Mã đơn đặt hàng:</span>
          <?php echo $row["MaDonDatHang"]; ?>
      </div>
      <div class="sp1">
          <span>Ngày đăt hàng:</span>
          <?php echo $row["NgayLap"]; ?>
      </div>
      <div class="sp1">
          <span>Tên khách hàng:</span>
          <?php echo $row["TenHienThi"]; ?>
      </div>
      <div class="sp1">
          <span>Số điện thoại:</span>
          <?php echo $row["DienThoai"]; ?>
      </div>
      <div class="sp1">
          <span>Tổng thành tiền:</span>
          <?php echo $row["TongThanhTien"]; ?> đồng
      </div>
      <a style="margin: 10px" href="pages/qlDonDatHang/xlDonDatHang.php?a=2&id=<?php echo $id; ?>" class="btnGiaoHang">
           Giao hàng
      </a>
      <a style="margin: 10px" href="pages/qlDonDatHang/xlDonDatHang.php?a=3&id=<?php echo $id; ?>" class="btnThanhToan">
           Thanh toán
      </a>
      <a style="margin: 10px" href="pages/qlDonDatHang/xlDonDatHang.php?a=4&id=<?php echo $id; ?>" class="btnHuy">
           Hủy đơn hàng
      </a>
</fieldset>

