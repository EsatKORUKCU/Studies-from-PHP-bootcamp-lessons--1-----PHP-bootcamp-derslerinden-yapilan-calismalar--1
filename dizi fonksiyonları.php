<?php

//$ogrenciler = array("Ali","Ahmet","Ayşe","Seda");

//unset($ogrenciler[1] , $ogrenciler[3]); // unset birinci üçüncü elemanları siler
//$ogrenciler = array(); // diziyi komple siler


// foreach($ogrenciler as $ogrenci) {echo "$ogrenci - ";}
// echo "<br><br>";
//$ogrenciler2 = array_reverse($ogrenciler);  // dizi içerisindekileri tersten sıralar
//array_unshift($ogrenciler,"Mehmet","Zeynep"); // başa ekle
//array_shift($ogrenciler);// baştaki elamnı sil
//array_push($ogrenciler,"Mehmet","Zeynep"); // sona ekle
//array_pop($ogrenciler);// sondaki elamnı sil
//foreach($ogrenciler as $ogrenci) {echo "$ogrenci - ";}


//$notlar = array ("Türkçe" => "60", "Matematik" => "40", "Fizik" => "90");
//asort($notlar); // degere göre küçükten büyüge dogru sıralar
//arsort($notlar); // degere göre büyükten küçüge dogru sıralar
//ksort($notlar); // anahtar göre küçükten büyüge dogru sıralar
//krsort($notlar); //anahtar göre büyükten küçüge dogru sıralar
//shuffle($notlar); //rastgele sıralama, karıştırma
//print_r($notlar);
/*
$sayılar = array(1,3,5,2,4,2,1);

print_r($sayılar);
echo "<br>Toplam Elemanı:" . count($sayılar); // sizeof($sayılar);
echo "<br>Toplama Sonucu:" . array_sum($sayılar);
echo "<br>Çarpım Sonucu:" . array_product($sayılar);
*/
/*
$ogrenciler1 = array("Ali","Ahmet");
$ogrenciler2 = array("Ayşe", "Zeynep","Selin");

$ogrenciler = array_merge($ogrenciler1,$ogrenciler2);

print_r ($ogrenciler);
*/
/*
$sayilar1 = array(1,4,5,3);
$sayilar2 = array(2,0,1,3);

//$sayilar = array_diff($sayilar1,$sayilar2);  // iki dizi arasındaki fark 4,5
$sayilar = array_intersect($sayilar1,$sayilar2);  // iki dizi arasındaki ortak elemanlar 1,3
print_r($sayilar);
*/

//$ogrenciler = array("Ali","Ahmet","Ayşe","Zeynep");
/*
//birinci yöntem
if (in_array("Mehmet",$ogrenciler)) { // in_array dizide arama yapar
    echo  "Bulundu";
} else {
    echo "Yok";
}
*/
/*
// ikinci yöntem
$sonuc = in_array("Mehmet",$ogrenciler)
if ($sonuc == true) {

}else {

}
*/

$ogrenciler = array("Ali","Ahmet","Ayşe","Zeynep","Ahmet","Mehmet","Selin","Zeynep");

//$sonuc = array_unique($ogrenciler); // dizide tekrar edenleri kaldırır
//print_r($sonuc);

//$sonuc = array_rand($ogrenciler); // diziden rastgele birini secer onun indisini alır
//echo "sonuç:" .$ogrenciler[$sonuc];

$sonuc = array_slice($ogrenciler,2,2); // diziden kesit alma ikinci elemandan itibaren iki eleman aldı
print_r($sonuc);
?>