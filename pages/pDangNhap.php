<div class="container">
    <div class="login">
        <form name="frmLogin" action="modules/xlDangNhap.php" method="post" >
            <div class="col-md-6 login-do">
                <div class="login-mail">
                    <input name="txtUS" type="text" placeholder="Email/Tên đăng nhập" required=""> <i class="glyphicon glyphicon-envelope"></i> </div>
                <div class="login-mail">
                    <input name="txtPS" type="password" placeholder="Mật khẩu" required=""> <i class="glyphicon glyphicon-lock"></i> </div>
                <a class="news-letter " href="#">
                    <label class="checkbox1">
                        <input type="checkbox" name="checkbox"><i> </i>Quên mật khẩu</label>
                </a>
                <label class="hvr-skew-backward">
                    <input type="submit" value="Đăng nhập"> </label>
            </div>
            <div class="col-md-6 login-right">
                <h3>BẠN CHƯA CÓ TÀI KHOẢN ?</h3> <a href="index.php?a=6" class=" hvr-skew-backward">Đăng ký</a>
            </div>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>