<div class="header">
    <div class="container">
        <div class="head">
            <div class=" logo" style="margin-left: 150px">
                <a href="index.php"><img src="images/logo.png" alt="" width="184" height="91"></a>
            </div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <?php
            if (isset($_SESSION["MaTaiKhoan"])) {
            ?>
            <div class="col-sm-5 col-md-offset-2  header-login" style="margin-left:700px">
                Hello, <?php echo $_SESSION["TenHienThi"]; ?>
                <a style="margin-left: 10px" href="modules/xlDangXuat.php">Đăng xuất</a>
                <a href="index.php?a=7">
                    <img src="img/ca.png" height="20" />
                </a>
            </div>
            <?php
            } else {
            ?>
                <div class="col-sm-5 col-md-offset-2  header-login" style="margin-left:780px">
                    <ul>
                        <li><a href="index.php?a=5">Đăng Nhập</a></li>
                        <li><a href="index.php?a=6">Đăng ký</a></li>
                    </ul>
                </div>
            <?php
            }
            ?>



        </div>
        <div class="container">
            <div class="head-top">
                <div class="navbar1" style="margin-left: 320px">
                    <a href="index.php">Trang Chủ</a>
                    <div class="subnav1">
                        <button class="subnavbtn1" onclick="window.location.href='index.php?a=3&id=1';">Điện thoại<i class="fa fa-caret-down"></i></button>
                        <div class="subnav-content1">
                            <p class="cnt">Hãng sản xuất</p>
                            <a href="index.php?a=2&id=1">APPLE</a>
                            <a href="index.php?a=2&id=2">SAMSUNG</a>
                            <a href="index.php?a=2&id=3">OPPO</a>
                            <a href="index.php?a=2&id=4">XIAOMI</a>
                            <a href="index.php?a=2&id=5">REALME</a>
                        </div>
                    </div>
                    <div class="subnav1">
                        <button class="subnavbtn1" onclick="window.location.href = 'index.php?a=3&id=2';">Tablet <i class="fa fa-caret-down"></i></button>
                        <div class="subnav-content1">
                            <p class="cnt">Hãng sản xuất</p>
                            <a href="index.php?a=2&id=7">APPLE (iPad)</a>
                            <a href="index.php?a=2&id=8">SAMSUNG</a>
                            <a href="index.php?a=2&id=6">LENOVO</a>
                        </div>
                    </div>
                    <div class="subnav1">
                        <button class="subnavbtn1" onclick="window.location.href = 'index.php?a=3&id=3';">Phụ kiện<i class="fa fa-caret-down"></i></button>

                    </div>
                    <a href="index.php?a=8">Phản hồi</a>
                </div>
            </div>
            <div class="col-sm-2 search-right">
            <a class="play-icon popup-with-zoom-anim" href="#small-dialog" ><i class="glyphicon glyphicon-search" style="margin: 6px 10px 15px 35px"> </i></a>
                <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
                <!----->
                <!---pop-up-box---->
                <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                <!---//pop-up-box---->
                <!--search--->
                <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                        <div class="login-search">
                            <input type="submit" value="">
                            <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"> </div>
                        <p>Hunter Mobile</p>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                    });
                </script>
                <!--//search--->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div>