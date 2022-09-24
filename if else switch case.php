<?php

$sayi1 = 20;
$sayi2 = 30;
$islem = "topla";

if($islem == "topla"){
    $sonuc = $sayi1 + $sayi2;
    echo "İşlem Sonucu: $sonuc";
}
elseif {
    $sonuc = $sayi1 - $sayi2;
    echo "İşlem Sonucu: $sonuc";
}
else{
    echo "Hatalı İşlem";
}

/*
switch($islem){
    case "topla":
    $sonuc = $sayi1 + $sayi2;
    echo "İşlem Sonucu: $sonuc";
    break;
    case "çikar":
        $sonuc = $sayi1 - $sayi2;
        echo "İşlem Sonucu: $sonuc";
        break;

    default:
    echo "Hatalı İşlem";
    break;
}
*/
/*
switch ($renk) {
    case "siyah":
        echo "Siyah";
    break;

    case "turuncu":
        echo "turuncu";
    break;

    case "Sarı":
        echo "Sarı";
    break;

    default:
        echo "Hiçbiri Degil";
    break;
}
*/
/*
$cinsiyet = "Kadın";
$yas = 25;

if($cinsiyet == "Erkek" && $yas>18) {
    echo "İçeri Girebilirsiniz";
}
elseif ($cinsiyet == "Erkek" && $yas <=18) {
    echo "Yaş Kriteri Saglanamadı";
}
elseif($cinsiyet!= "Erkek") {
    echo "Sadece Erkekler";
}
else {
    echo "Hata Oluştu";
}
*/
/*
$renk = "mavi";

if($renk == "kirmizi"){
    echo "Kırmızı";
}
elseif($renk == "sari"){
    echo "Sarı";
}
elseif($renk == "turuncu"){
    echo "turuncu";
}
elseif($renk == "siyah"){
    echo "Siyah";
}
else {
    echo "Renk: $renk";
}
*/
/*
$degisken1 = 50;

if ($degisken1 < 50 || $degisken1 > 50) {
    echo "Degiskenin degeri 50'den küçüktür veya büyüktür.";
} 
else  {
    echo "Degiskenin degeri 50'ye eşittir.";
}
*/
?>