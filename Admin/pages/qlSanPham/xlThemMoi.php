<?php
   include "../../../lib/DataProvider.php";

   if(isset($_GET["txtTen"]))
   {
       $ten = $_GET["txtTen"];
       $hang = $_GET["cbHang"];
       $hinh = $_GET["fHinh"];
       $gia = $_GET["txtGia"];
       $ton = $_GET["txtTon"];
       $mota = $_GET["txtMoTa"];
       $loai = $_GET["txtLoai"];
       $hang = $_GET["txtHang"];
       $xx = $_GET["txtXx"];
       $nsx = $_GET["txtNsx"];

       $sql = "INSERT INTO sanpham(TenSanPham, HinhURL,GiaSanPham,SoLuongTon,MoTa,MaLoaiSanPham,MaHangSanXuat,XuatXu,NhaSanXuat) 
       VALUES('$ten','$hinh','$gia','$ton','$mota','$loai','$hang','$xx','$nsx')";
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=2");
?>