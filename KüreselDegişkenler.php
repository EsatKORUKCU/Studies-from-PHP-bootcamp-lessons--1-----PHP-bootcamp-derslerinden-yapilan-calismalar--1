<?php

print_r($_FILES);

echo "
    <br><br><br>
    <form method='post' enctype='multipart/form-data' action='index.php'>
         Dosya:<input type='file' name='dosya'><br><br>
        <input type='submit' value='Yükle'>
    </form>
";

/*
echo "Merhaba " . $_POST["adsoyad"];

echo "
    <br><br><br>
    <form method='post' action='index.php'>
         Ad Soyad:<input type='text' name='adsoyad'><br><br>
        <input type='submit' value='Gönder'>
    </form>
";
*/
//echo "Merhaba" . $_GET["adsoyad"];

/*
session_start();

$_SESSION["ziyaretci"] = "Mehmet Selçuk Batal";
echo "Merhaba" . $_SESSION["ziyaretci"];
*/
/*
setcookie("ziyaretci","Mehmet Selçuk Batal", time()+360);
echo "Merhaba" . $_COOKIE["ziyaretci"];
*/
//echo $_REQUEST["adsoyad"]; //cookıe get post hangisinden geldigine dair bilgi olmadıgında kullanılır

// SERVER degişkeni ile ilgili örnekler
/*
echo "IP Adresiniz:" . $_SERVER["REMOTE_ADDR"];
echo "<br>Tarayıcınız:" . $_SERVER["HTTP_USER_AGENT"];
echo "<br>Sunucu Adresi:" . $_SERVER["HTTP_HOST"];
echo "<br>Sunucu IP Adresi:" . $_SERVER["SERVER_ADDR"];
echo "<br>Sunucu Adı:" . $_SERVER["SERVER_NAME"];
echo "<br>Sunucu Yazılımı:" . $_SERVER["SERVER_SOFTWARE"];
echo "<br>Sayfa Dizin Adresi:" . $_SERVER["DOCUMENT_ROOT"];
*/
//  $GLOBALS degişkeni ile heryerden degişkene ulaşabiliriz
/*
function karsilama() {
    echo "Merhaba $adsoyad";
    echo "<br>Merhaba " . $GLOBALS["adsoyad"];
}

$adsoyad = "Mehmet Selçuk Batal";
karsilama();
*/
?>