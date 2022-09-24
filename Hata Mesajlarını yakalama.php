<?php

//Ölümcül Hatalar (E_ERROR)
//Çalışma Anı Uyarıları (E_WARNING)
//Çalışma Anı Bildirimleri (E_NOTICE)

// error_reporting(0); // Tüm hata mesajları gizlenir
// error_reporting(E_ALL); // Tüm hata mesajları gösterilir
// error_reporting(-1); // Tüm hata mesajları gösterilir
// error_reporting(E_ERROR | WARNING | E_PARSE); // Belirtilen mesajlar gösterilir

$sayi1 = 10;
$sayi2 = 0;

try{

    if (!$sonuc = $sayi1 / $sayi2) {
        throw new Exception ("Hata Oluştu!");
    }

    echo $sayi1 / $sayi2;

} catch  (Exception $e) {
    echo $e->getMessage();
    // print_r($e);
}


?>