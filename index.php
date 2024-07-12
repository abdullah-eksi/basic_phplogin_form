<?php 
session_start();
ob_start();

if($_SESSION["user"]){
    header("Location:admin/index.php");
}else{
  header("Location:login.php");
}


?>