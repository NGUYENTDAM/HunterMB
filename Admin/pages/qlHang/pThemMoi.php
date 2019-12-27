<form action="pages/qlHang/xlThemMoi.php" method="get" onsubmit="return KiemTra();">
  <fieldset class="flt">
       <legend class="sp1">Thêm mới hãng sản xuất</legend>
    <div class="sp1">
       <span>Tên hãng sản xuất:</span>
       <input class="ipt" type="text" name="txtTen" id="txtTen" />
       <input class="sbm" type="submit" value="Thêm mới" />
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