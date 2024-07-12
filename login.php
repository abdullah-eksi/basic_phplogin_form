<?php 
session_start();
ob_start();
if(isset($_SESSION["user"])){
	header("Location:admin/index.php");

}
?><!doctype html>
<html lang="en">
  <head>
  	<title>LOGİN ÖRNEĞİ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">GİRİS SAYFASI</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Gırıs sayfasına hoşgeldin</h2>
								<p>Henuz bir hesabın yok mu?</p>
								<a href="kayit.php" class="btn btn-white btn-outline-white">KAYIT OL</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Giris yap</h3>
			      		</div>

			      	</div>
							<form action="islem.php" method="post" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Kullanıcı Adı</label>
			      			<input type="text" name="username" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Şifre</label>
		              <input type="password" name="password" class="form-control" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="giris" class="form-control btn btn-primary submit px-3">GİRİŞ YAP</button>
		            </div>
                <?php
              if(isset($_GET['durum'])){

                if ($_GET['durum']=="basarili") {

               header("Location:admin/index.php?durum=basarili");
				

              }
              else{
                if ($_GET['durum']=="basarisiz") {?>

                <div class="alert alert-danger">
                  <strong>giriş başarısız :[</strong>
                </div>

		            </div>
              <?php } }}?>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
