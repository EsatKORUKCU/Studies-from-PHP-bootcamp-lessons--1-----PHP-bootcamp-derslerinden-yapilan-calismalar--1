<?php

$metin = "Mehmet Selçuk Batal";

$icerik = explode(" ",$metin); // boşluklardan böler $metin üçe böldü html ceckbox tan gelenler
$icerik2 = implode("-",$icerik); // dizi elemanlarını arasına - işareti koyarak birleştirir
echo $icerik2;

//echo $icerik[0];  // bölünmüş olan diziden sıfırıncı indisi yazdırır
/*
foreach ($icerik as $eleman) { // dizi elemanlarını alt alta yazar
    echo $eleman."<br>";
}
*/

/*
$metin = "Mehmet\nSelçuk\nBatal";
echo nl2br($metin);
*/
/*
$metin = "Mehmet Selçuk Batal'ın evi";
$etkisiz = addslashes($metin);
$etkili = stripslashes($etkisiz);
echo "$etkisiz <br> $etkili";
*/
/*
$metin = "<b><i><u>Mehmet Selçuk Batal'ın sözü: </u></i></b>";
echo strip_tags($metin) ."<br>"; // tüm etiketleri temizleme text alia
echo strip_tags($metin,"<b><i>"); // b ve i etiketini temizlemeyecek sadece u temizleme
*/
/*
$metin = "<b>Mehmet Selçuk Batal'ın sözü: \"\"</b>";
echo htmlspecialchars($metin,ENT_QUOTES)."<br>";  // çift tırnakları tek tırnaga dönüştür
echo htmlspecialchars($metin,ENT_NOQUOTES)."<br>"; // çift tırnakları dönüştürme 
echo htmlspecialchars($metin,ENT_COMPAT)."<br>"; // sadece çift tırnakları dömüştür
/
/*
$metin = "<b>Mehmet Selçuk Batal'ın sözü:</b>";
echo htmlentities($metin); // metin içindeki küçüktür büyüktür gibi işaretleri direk yazar
*/
/*
echo str_replace(" ","",$metin)."<br>"; // metin içindeki boşlukları siler
echo str_replace("Batal","Koçak",$metin);// batal yerine koçak yazacak
*/
/*
if(strstr($metin,"tal") == true){
    echo "Bulundu";
}
else {
    echo "yok";
}
*/

//echo strrev($metin);// metni ters çevirir fakat türkçe kRkter desteklemez


/*
echo strtolower($metin) ."<br>"; // metin içindeki tüm karakterleri küçük harfe çevirir
echo strtoupper($metin) ."<br>"; //metin içindeki tüm karakterleri büyük harfe çevirir
echo ucfirst($metin) ."<br>"; // metin başındaki karakter büyük
echo lcfirst($metin) ."<br>";  // metin başındaki karakter küçük
echo ucwords($metin) ."<br>"; // metin içindeki kelimelerin ilk harfinin büyük harfe çevirmek için 
echo mb_strtoupper($metin) ."<br>"; // türkçe karakterleide uygulamak için
echo mb_strtolower($metin) ."<br>";
*/

/*  
echo mb_substr($metin,7,6,"utf-8"). "<br>"; // istenen kesiti yazar 7.karakterden itibaren 6 karakter keser
echo substr($metin,-5) . "<br>"; // sondan 5 karakter yazar
echo substr($metin,0,-5) . "<br>"; // sondan 5 karakter sil
echo substr($metin,-5,2) . "<br>"; // sondan 5 karakterden itibaren 2 karakter al
*/
/*
//echo strlen($metin); // karakter sayısını verir boşluklar dahil türkçe karakterleri iki tane sayıyor
echo mb_strlen($metin,"utf-8") ."<br>"; // türkce karakterleri tek sayması için
echo "Sol Boşluksuz:" . mb_strlen(ltrim($metin),"utf-8"). "<br>";
echo "Sag Boşluksuz:" . mb_strlen(rtrim($metin),"utf-8"). "<br>";
echo "Boşluksuz:" . mb_strlen(trim($metin),"utf-8") . "<br>";
*/
?>