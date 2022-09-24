<?php

$degisken1 = 45;
$degisken2 = 1;

echo "$degisken1'in Sinüsü:" . sin($degisken1) . "<br>";
echo "$degisken1'in Kosinüsü:" . cos($degisken1) ."<br>";
echo "$degisken1'in Tanjantı:" . tan($degisken1) ."<br>";
echo "$degisken2'in Ters Sinüsü:" . asin($degisken2) ."<br>";
echo "$degisken2'in Ters Kosinüsü:" . acos($degisken2) ."<br>";
echo "$degisken2'in Ters Tanjantı:" . atan($degisken2) ."<br>";

/*
$degisken = 85;
echo "Mutlak Deger:" . abs($degisken) . "<br>";
echo "Karekök:" . sqrt($degisken) . "<br>";
echo "4.Üssü:" . pow($degisken,4) ."<br>";
echo "3'ten kalanı:" . fmod($degisken,3) . "<br>";
echo "Logaritması:" . log($degisken) . "<br>";
echo "10'luk Log:" . log10($degisken). "<br>";
echo "E üssü -5:" . exp(-5) . "<br>";
echo "9-16!lık Dik Üçgenin Hipotenüsü:" . hypot(9,16);
*/
/*
$enkucuk = min(10,28,5,3,17,76);
$enbuyuk = max(10,28,5,3,17,76);
echo "En Küçük:" . $enkucuk . "<br>";
echo "En Büyük:" . $enbuyuk . "<br>";
*/
/*
$sayi = 17.76;

echo "Ceil:" . Ceil($sayi) . "<br>"; // üste yuvarlar
echo "Floor:" . floor($sayi) . "<br>";// alta yuvarlar
echo "Round:" .round($sayi) . "<br>";// ondalık kısma göre üste-alta yuvarlar
echo "Kırpılmış:" . round($sayi,2); // ondalık kısmı 2 basamak göster
*/
/*
echo "Rastgele Sayı:" .rand(); // rastgele sayı üretir
echo "<br>";
echo "Rastgele Sayı:" . mt_rand(10,99); // iki sayı arasında rastgele sayı üretir
*/

// $zaman = mktime(0,0,0,date("m")-8,date("d"),date("Y")-5); // 5 yıl 8 ay öncesine gidildi
// echo "Tarih" .date("d-m-Y", $zaman); // tarih bilgisini formatlama

// $dun = getdate(time()- 24*60*60); //24*60*60=86400 saniye 1 gün
// $bugun = getdate(time());
// $yarin = getdate(time() + 24*60*60);
// print_r ($dun["mday"] . "-" .$dun["mon"] . "-".$dun["year"]);
// echo "<br>";
// print_r ($bugun["mday"] . "-" .$bugun["mon"] . "-".$bugun["year"]);
// echo "<br>";
// print_r ($yarin["mday"] . "-" .$yarin["mon"] . "-" .$yarin["year"]);

// $gun = array("pazar","pazartesi","salı","çarşamba","perşembe","cuma","cumartesi");

// $ay = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");

// echo "Bugün:" .$gun[date("w")] . "<br>";
// echo "Bu Ay:" .$ay[date("n")] . "<br>";
// echo "Şimdi:" . date("d") . $ay[date("n")] . date("Y") .$gun[date("w")] . "<br>";
// echo "Zaman:" . date("H:i:s");

// echo "Bugün:" .date("d-m-Y H:i:s") . "<br>"; //gün-ay-yıl saat-dakika-saniye
// echo "Bugün yılın" .date("z") .".günüdür.<br>"; //yılın kacıncı günü oldugu
// echo "Bu hafta yılın" . date("W") . ".haftasıdır.<br>"; // yılın kacıncı haftası oldugu
// echo "Bu ay toplam" . date("t") . "gün çekmektedir."; // ayın kaç gün oldugu

//$bugun = getdate();

//echo $bugun["year"];// hangi yıl
//echo $bugun["weekday"];// haftanın hangi günü
//print_r($bugun);

//header ("Content-Type:text/html; Charset=Utf-8"); // sayfada yazılan türkçe karakterleri desteklemeyi saglar

//header ("Cache-Control:no-cache, must-revalidate");// ön bellek tanımlanması kredi kartı bilgilerini tutmamak için
//header ("Expires:Sun,12 May 2000 00:00:00 GMT"); //geçmiş tarih tanımlaması

//header ("Location: https://www.mehmetbatal.com"); //yönlendirme

//header ("Refresh:10; url=https://www.mehmetbatal.com"); //10 sn yönlendirme
//die ("10 saniye sonra yönlendiriliyorsunuz") // yönlendirme mesajı



?>