<?php
 
session_start();
 
if($_SESSION["UserName"] == "admin" && $_SESSION["UserPassword"] == "admin123")	
{
	echo "
	Bu sayfa size özel bir sayfadır. Oturumunuz başarıyla gerçekleştiği için şuan bu sayfaya girebilmektesiniz.
	<br><br>
	<a href='index.php'>Anasayfa</a> | <a href='exit.php'>Çıkış</a>
	";
}
else
{
	header("location: login.php");	
}
 
?>