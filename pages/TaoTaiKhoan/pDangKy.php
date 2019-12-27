<div class="container">
    <div class="login">
        <form action="pages/TaoTaiKhoan/xlTaoTaiKhoan.php" method="post" onsubmit="return KiemTra()">
            <div class="col-md-6 login-do">
                <div class="login-mail">
                    <input type="text" id="name" name="name" placeholder="Họ & Tên" required=""> <i class="glyphicon glyphicon-user"></i> </div>
                <div class="login-mail">
                    <input type="text" id="tel" name="tel" placeholder="Số Điện Thoại" required=""> <i class="glyphicon glyphicon-phone"></i> </div>
                <div class="login-mail">
                    <input type="text" id="mail" name="mail" placeholder="Email" required=""> <i class="glyphicon glyphicon-envelope"></i> </div>
                <div class="login-mail">
                    <input type="text" id="us" name="us" placeholder="Tên Đăng Nhập" required=""> <i class="glyphicon glyphicon-user"></i> </div>
                <div class="login-mail">
                    <input type="password" placeholder="Mật Khẩu" id="ps" name="ps" required=""> <i class="glyphicon glyphicon-lock"></i> </div>
                <div class="login-mail">
                    <input type="password" id="rps" placeholder="Nhập Lại Mật Khẩu" required=""> <i class="glyphicon glyphicon-lock"></i> </div>
                <label class="hvr-skew-backward">
                    <input type="submit" value="Đồng ý"> </label>
            </div>
            <div class="col-md-6 login-right">
                <h3>BẠN ĐÃ CÓ TÀI KHOẢN ?</h3> <a href="index.php?a=5" class="hvr-skew-backward">Đăng nhập</a>
            </div>
            <div class="clearfix"> </div>
        </form>
        <script type="text/javascript">
            function KiemTra() {
                var co = true;

                var control = document.getElementById('us');
                var err = document.getElementById('eUS');
                if (control.value == "") {
                    co = false;
                    err.innerHTML = "Tên đăng nhập không được rỗng";
                } else {
                    err.innerHTML = "";
                }

                control = document.getElementById('ps');
                err = document.getElementById('ePS');
                if (control.value == "") {
                    co = false;
                    err.innerHTML = "Mật khẩu không được rỗng";
                } else {
                    err.innerHTML = "";
                }

                control1 = document.getElementById('rps');
                err = document.getElementById('eRPS');
                if (control.value == control1.value) {
                    co = false;
                    err.innerHTML = "Nhập lại mật khẩu không chính xác";
                } else {
                    err.innerHTML = "";
                }

                control = document.getElementById('name');
                err = document.getElementById('eNAME');
                if (control.value == "") {
                    co = false;
                    err.innerHTML = "Tên hiển thị không được rỗng";
                } else {
                    err.innerHTML = "";
                }

                control = document.getElementById('add');
                err = document.getElementById('eADD');
                if (control.value == "") {
                    co = false;
                    err.innerHTML = "Địa chỉ không được rỗng";
                } else {
                    err.innerHTML = "";
                }

                control = document.getElementById('tel');
                err = document.getElementById('eTEL');
                if (control.value == "") {
                    co = false;
                    err.innerHTML = "Số điện thoại không được rỗng";
                } else {
                    err.innerHTML = "";
                }

                control = document.getElementById('mail');
                err = document.getElementById('eMAIL');
                if (control.value == "") {
                    co = false;
                    err.innerHTML = "Email không được rỗng";
                } else {
                    err.innerHTML = "";
                }
            }
        </script>
    </div>
</div>