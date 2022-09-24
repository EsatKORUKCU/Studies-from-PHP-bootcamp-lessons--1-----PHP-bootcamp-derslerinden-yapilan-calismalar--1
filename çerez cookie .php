<?php

//setcookie("test","Mehmet Selçuk BATAL",time()+3600, "/", "mehmetbatal.com", true, true) // test isim parametresi, MSB saklanacak olan bilgi, çerezin kalacagı süre 3600 saniye, /  nerede geçerli olacagı, true yazarsak https de geçerli olacak false yazarsak sadece http de geçerli olacak, ikinci true da betik dilleri ulaşılabilir javascript false olursa ulaşılamaz

//setcookie("adsoyad", "Mehmet Selçuk BATAL", time()+3600);
//echo "Çerez İçerigi: ".$_COOKIE["adsoyad"];
/*
if (isset($_COOKIE["ziyaretci"])) { // tanımlanıp tanımlanmadıgını kontrol etmek için
    echo "Çerez dosyası var.";
}
else {
    echo "Çerez yok ve oluşturulacak";
    setcookie("ziyaretci");
}
*/
/*
setcookie("ziyaretci", "Ad soyad");

if (empty($_COOKIE["ziyaretci"])) { // içerigin boş olup olmadıgını kontrol eder
    echo "Çerez içi boş";
}
else {
    echo "Çerez içi dolu.";
}
*/

$adsoyad = sha1(md5("Mehmet Selçuk Batal"));
setcookie ("adsoyad", $adsoyad, time()+3600);

echo "Çerez İçi:  " .$_COOKIE["adsoyad"];

//setcookie("adsoyad","",time()-1); // çerez dosyasını siler


?>