<?php
include "../../../lib/DataProvider.php";

if (isset($_GET["us"])) {

    $us = $_GET["us"];
    $ps = $_GET["ps"];
    $name = $_GET["name"];
    $tel = $_GET["tel"];
    $mail = $_GET["mail"];

    $sql = "INSERT INTO taikhoan(TenDangNhap, MatKhau, TenHienThi, DienThoai, Email,BiXoa,MaLoaiTaiKhoan) 
                VALUES ('$us', '$ps', '$name', '$tel', '$mail',0, 1)";

    DataProvider::ExecuteQuery($sql);
}

DataProvider::ChangeURL("../../index.php?c=1");
