<?php
session_start();
ob_start();
include 'baglan.php';
if (isset($_POST['kaydet'])) {
	echo	 $kullanici_adsoyad = htmlspecialchars($_POST['username']);
	echo "<br>";

	echo	$kullanici_passwordone = $_POST['passwordone'];
	echo "<br>";
	echo	$kullanici_passwordtwo = $_POST['passwordtwo'];
	echo "<br>";

	if ($kullanici_passwordone == $kullanici_passwordtwo) {
		if (strlen($kullanici_passwordone) >= 6) {
			$kullanicisor = $db->prepare("select * from user where username=:name");
			$kullanicisor->execute(array(
				'name' => $kullanici_adsoyad
			));
			$say = $kullanicisor->rowCount();
			if ($say == 0) {
				$password = $kullanici_passwordone;
				$kullanicikaydet = $db->prepare("INSERT INTO user SET
							username=:username,
							userpassword=:userpassword
							");
				$insert = $kullanicikaydet->execute(array(
					'username' => $kullanici_adsoyad,
					'userpassword' => $password
				));

				if ($insert) {
					echo "kayıt başarılı";
					header("Location:kayit.php?durum=basarili");
				} else {
					header("Location:kayit.php?durum=basarisiz");
				}
			} else {

				header("Location:kayit.php?durum=varolankayit");
			}
		} else {

			header("Location:kayit.php?durum=eksiksifre");
		}
	} else {
		header("Location:kayit.php?durum=farklisifre");
	}
}


if (isset($_POST['giris'])) {

	echo $username = htmlspecialchars($_POST['username']);
	echo $password = $_POST['password'];

	$kullanicisor = $db->prepare("SELECT * FROM user where username=:name and userpassword=:password");
	$kullanicisor->execute(array(
		'name' => $username,
		'password' => $password
	));
	$say = $kullanicisor->rowCount();
	if ($say == 1) {
		 $_SESSION['user'] = $username;
		header("Location:login.php?durum=basarili");
	} else {
		header("Location:login.php?durum=basarisiz");
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	header("Location:login.php");
}
