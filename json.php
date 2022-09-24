<?php
// json yapısından php dizisine dönüştürdük
$json = '{"no":"1","ad":"Mehmet","soyad":"Batal"}';
$veri = json_decode($json,false);

foreach($veri as $anahtar=>$deger){
    echo "$anahtar = $deger<br>";
}
//echo $veri["ad"]."<br>";
//echo $veri["soyad"];
//var_dump($veri);

// //json yapısından php nesnesine dönüştürdük
// $json = '{"no":"1","ad":"Mehmet","soyad":"Batal"}';
// $veri = json_decode($json,false);

// echo $veri->no."<br>";
// echo $veri->ad."<br>";
// echo $veri->soyad;

// nesne yapısını json formatına dönüştürdük
// $nesne->no = "1";
// $nesne->ad = "Mehmet";
// $nesne->soyad = "Batal";

// $json = json_encode($nesne,JSON_UNESCAPED_UNICODE);

// echo $json;

//diziyi json formatına dönüştürdük
// $dizi = array("no" => "1", "ad" => "Mehmet", "soyad" => "Batal");
// $json = json_encode($dizi, JSON_UNESCAPED_UNICODE);

// echo $json;


?>