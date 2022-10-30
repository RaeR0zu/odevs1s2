<?php
session_start();


if($_SESSION["UserName"]== "admin" && $_SESSION["UserPassword"]== "admin123")
{
    echo "Hoş Geldin ". $_SESSION["UserName"]." <br> <br> 
    <a href= 'private_page.php'>Özel Sayfa</a> | <a href='exit.php'>Çıkış</a>";
}
elseif($_SESSION["UserName"]=="admin" or $_SESSION["Userpassword"]=="admin123")
{
    
  echo" hatalı kulllanıcı adı veya şifre girdiniz..!";
    
}
else
    {
        header("location: login.php");
    }
?>
