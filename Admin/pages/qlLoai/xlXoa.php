<?php
   include "../../../lib/DataProvider.php";

   if(isset($_GET["id"]))
   {
       $id = $_GET["id"];
    
       $sql = "UPDATE LoaiSanPham SET BiXoa = 1 WHERE MaLoaiSanPham = $id";
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=3");
?>