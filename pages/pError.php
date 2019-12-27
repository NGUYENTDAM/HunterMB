
<div class="four">
	<h3>404</h3>
	<p>Xin lỗi ! Đã xảy ra lỗi sự cố chúng tôi đang cố gắng khắc phục. Mong bạn quay lại sau !!!</p> <a href="index.php" class="hvr-skew-backward">Quay Lại Trang Chủ</a> </div>
</div>
<?php
    if(isset($_GET["id"]))
    {
        switch ($_GET["id"]){
            case 1:
                echo "Tên đăng nhập và mật khẩu không tồn tại";
            break;
        }
    }

?>