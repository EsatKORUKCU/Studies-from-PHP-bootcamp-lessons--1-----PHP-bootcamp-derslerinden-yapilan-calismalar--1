<?php
//çok boyutlu diziler
//birinci yöntem
$ogrenciler = array();
$ogrenciler[0] = array("adsoyad" => "Fatih", "not" => "60");
$ogrenciler[1] = array("adsoyad" => "Mehmet", "not" => "70");
$ogrenciler[0] = array("adsoyad" => "Zehra", "not" => "80");

//ikinci yöntem
$ogrenciler = array(
    array("adsoyad" => "Fatih", "not" => "60"),
    array("adsoyad" => "Mehmet", "not" => "70"),
    array("adsoyad" => "Zehra", "not" => "80")
);

//üçüncü yöntem
$ogrenciler = array();
$ogrenciler[0]["adsoyad"] = "Fatih";
$ogrenciler[0]["not"] = "60";
$ogrenciler[1]["adsoyad"] = "Mehmet";
$ogrenciler[1]["not"] = "70";
$ogrenciler[2]["adsoyad"] = "Zehra";
$ogrenciler[2]["not"] = "80";

echo $ogrenciler[0]["adsoyad"];
echo "-";
echo $ogrenciler[0]["not"];
echo "<br><br>";

echo $ogrenciler[1]["adsoyad"];
echo "-";
echo $ogrenciler[1]["not"];
echo "<br><br>";

echo $ogrenciler[2]["adsoyad"];
echo "-";
echo $ogrenciler[2]["not"];
echo "<br><br>";

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci["adsoyad"]."-".$ogrenci["not"];
    echo "<br><br>";
}

//tek boyutlu diziler 
//$ogrenciler = array(4,6,7,8,9,"Ali","Ahmet","Seda");
/*
foreach($ogrenciler as $ogrenci) {
    echo "$ogrenci - ";
}
*/
//echo $ogrenciler[5] ; // beşinci deger yazdır ali

/*
$ogrenciler = array();
$ogrenciler[] = 45 ;
$ogrenciler[] = "Ali";
*/

?>