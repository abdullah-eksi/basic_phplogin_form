
<?php 
session_start();
ob_start();
if(isset($_SESSION["user"])){
	header("Location:admin/index.php");

}

?>
<!doctype html>
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
					<h2 class="heading-section">KAYIT OL</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>KAYIT SAYFASINA HOŞGELDİN</h2>
								<p>zaten bir hesabın varmı</p>
								<a href="login.php" class="btn btn-white btn-outline-white">giriş yap</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">KAYIT OL</h3>
			      		</div>

			      	</div>
							<form action="islem.php" method="post" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Kullanıcı Adı</label>
			      			<input type="text" name="username" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Şifre</label>
		              <input type="password" name="passwordone" class="form-control" placeholder="Password" required>
		            </div>
                <div class="form-group mb-3">
                 <label class="label" for="password">tekrar Şifre</label>
                 <input type="password" name="passwordtwo" class="form-control" placeholder="tekrarPassword" required>
               </div>
		            <div class="form-group">
		            	<button type="submit" name="kaydet" class="form-control btn btn-primary submit px-3">kayıt ol</button>
		            </div>
		            <div class="form-group d-md-flex">
                  <?php
                if(isset($_GET['durum'])){

                  if ($_GET['durum']=="basarili") {?>

                  <div class="alert alert-success">
                    <strong>kayıt başarılı :]</strong>
                  </div>

                  <?php }
                  if ($_GET['durum']=="farklisifre") {?>

                  <div class="alert alert-danger">
                    <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
                  </div>

                  <?php } elseif ($_GET['durum']=="eksiksifre") {?>

                  <div class="alert alert-danger">
                    <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
                  </div>

                  <?php } elseif ($_GET['durum']=="mukerrerkayit") {?>

                  <div class="alert alert-danger">
                    <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
                  </div>

                  <?php } elseif ($_GET['durum']=="basarisiz") {?>

                  <div class="alert alert-danger">
                    <strong>Hata!</strong> Kayıt esnasında bir sorun oluştu desteğe basvurunuz
                  </div>

                  <?php }
                  }
                   ?>
		            </div>
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
