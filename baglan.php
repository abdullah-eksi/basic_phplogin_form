<?php


try {
	$db = new PDO("mysql:host=localhost; dbname=login; charset=utf8", 'root','');
//	echo "veritabanı başarılı";
}
catch(Exception $e)
{
	echo $e->getMessage();
}
//sıkıntı yok burda
?>
