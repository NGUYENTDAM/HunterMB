<?php
   include "../../../lib/DataProvider.php";

   if(isset($_GET["id"]))
   {
       $id = $_GET["id"];
    
       $sql = "UPDATE HangSanXuat SET BiXoa = 1 WHERE MaHangSanXuat = $id";
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=4");
?>