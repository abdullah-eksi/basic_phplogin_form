

<?php 
session_start();
ob_start();
if($_SESSION["user"]){
   
}else{
  header("Location:../login.php");
}

?>
hoşgeldin

<form action="../islem.php">

<button type="submit" name="logout">cıkış</button>

</form>