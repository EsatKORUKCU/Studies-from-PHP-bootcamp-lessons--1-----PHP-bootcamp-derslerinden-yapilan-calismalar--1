<?php
function sonuc(){
    $toplama = 20+ 30;
    return $toplama;
}

$islem = sonuc();

echo "İşlem Sonucu: $islem";

// function topla($sayi1=0,$sayi2=0) {
//     $toplama = $sayi1 + $sayi2;
//     return $toplama;
// }

// $sonuc = topla(15,25);

// echo "işlem sonucu: $sonuc";

// //parametresiz fonksiyon Global degerli
// function yazdir(){

//         global $degisken;
//         echo $degisken;
    
// }

// $degisken = "Merhaba Dünya";
// yazdir();

// function yazdir2($deger="") {
//     echo $deger;
// }
// yazdir2("Merhaba Dünya");

// //parametreli fonksiyon varsayılan degerli
// function yazdir($sayi=0,$isim=""){

//     for ($i=1; $i<=$sayi; $i++) {
//         echo "$i - $isim <br> ";
//     }
// }

// yazdir(50);

// echo "<br><hr><br>";

// //parametreli fonksiyon
// function yazdir($sayi,$isim){

//     for ($i=1; $i<=$sayi; $i++) {
//         echo "$i - $isim <br> ";
//     }
// }

// yazdir(50,"Mehmet Selçuk ");

// echo "<br><hr><br>";


// //parametresiz fonksiyon
// function yazdir(){

//     for ($i=1; $i<=10; $i++) {
//         echo "$i - Mehmet Selçuk Batal <br> ";
//     }
// }

// yazdir();

// echo "<br><hr><br>";
?>