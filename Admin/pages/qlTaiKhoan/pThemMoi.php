<form action="pages/qlTaiKhoan/xlThemMoi.php" method="get" onsubmit="return KiemTra();">
   <fieldset class="flt">
      <legend class="sp1">Thêm mới tài khoản</legend>
      <div class="sp1">
         <span>Tên Đăng Nhập :</span>
         <input class="ipt" type="text" name="us" id="txtTen" />
      </div>
      <div class="sp1">
         <span>Mật Khẩu :</span>
         <input class="ipt" type="password" name="ps" id="txtPass" />
      </div>
      <div class="sp1">
         <span>Tên Hiển Thị :</span>
         <input class="ipt" type="text" name="name" id="txtTenHT" />
      </div>
      <div class="sp1">
         <span>Điện Thoại :</span>
         <input class="ipt" type="text" name="tel" id="txtDienThoai" />
      </div>
      <div class="sp1">
         <span>Email :</span>
         <input class="ipt" type="text" name="mail" id="txtEmail" />
      </div>
      <div class="sp1">
      <input class="sbm" type="submit" value="Thêm mới" />
      </div>
      </div>
      <div id="error"></div>
   </fieldset>
</form>
<script type="text/javascript">
   function KiemTra() {
      var ten = document.getElementById("txtTen");
      var err = document.getElementById("error");
      if (ten.value == "") {
         err.innerHTML = "Tên không được rỗng";
         ten.focus();
         return false;
      } else
         err.innerHTML = "";

      return true;
   }
</script>