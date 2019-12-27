<?php
    if(!isset($_GET["id"]))
       DataProvider::ChangeURL("index.php?c=404");

    $id = $_GET["id"];
    $sql = "SELECT * FROM HangSanXuat WHERE MaHangSanXuat = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
?>
<form action="pages/qlHang/xlCapNhat.php" method="get" onsubmit="return KiemTra();">
   <fieldset class="flt">
      <legend class="sp1">Cập nhật thông tin hãng sản xuất</legend>
      <div class="sp1">
         <span>Tên hãng sản xuất:</span>
         <input class="ipt" type="text" name="txtTen" value="<?php echo $row["TenHangSanXuat"]; ?>" />
         <input type="hidden" name="id" value="<?php echo $row["MaHangSanXuat"]; ?>" />
         <input class="sbm" type="submit" value="Cập nhật" />
      </div>
      <div id="error"></div>
    </fieldset>
</form>
<script type="text/javascript">
   function KiemTra()
   {
       var ten = document.getElementById("txtTen");
       var err = document.getElementById("error");
       if(ten.value == "")
       {
           err.innerHTML = "Tên hãng sản xuất không được rỗng";
           ten.focus();
           return false;
       }
       else
           err.innerHTML = "";

        return true;
   }
</script>
    