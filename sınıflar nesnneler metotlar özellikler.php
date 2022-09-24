<?php

class Ogrenciler {
    public $adsoyad = "Mehmet Selçuk Batal"; // sınıfın dışından dogrudan erişilebilir
    private $tckimlik = "9999999"; // sınıfın içinden metotlar aracılıgı ile erişilebilir
    protected $ogrencino = "1234"; // metotlar ve mirascılar tarafından erişilebilir
    static $sinif = "Hazırlık"; // sınıfın içinden veya dışından dogrudan erişilebilir
    public const okul = "Ege Üniversitesi"; // sabitler

    /*
    public function Yazdir() {
        //return $this->adsoyad; // class içindeki herhangi bir şeye this ile ulaşabiliriz
        //echo $this->adsoyad;// 11
        $sonuc = "Ad Soyad: $this->adsoyad<br>
        Tc Kimlik: $this->tckimlik<br>
        Ögrenci No: $this->ogrencino<br>";
        return $sonuc;
    }
    */
    public function Yazdir($ad, $soyad, $tckimlik){
       // return $ad. " " .$soyad." " .$tckimlik;
       $this->adsoyad = "$ad $soyad";
       $this->tckimlik = $tckimlik;
       return "$this->adsoyad<br>$this->tckimlik";

    }


}

$ogrenci = new Ogrenciler;
echo $ogrenci->Yazdir("Ahmet", "Koçak","1111111" );

/*
$ogrenci = new Ogrenciler; // nesne oluirurduk
echo $ogrenci->Yazdir(); // yadır metotun içindeki ulaştık
//$ogrenci->Yazdir(); // 11 metot içinde echo ile yazdırdık ondan dolayı yazmaya gerek yok
*/

//$ogrenci = new Ogrenciler; // ogrenci nesnesi ile ulaştık public in dışarıdan çagrılmasi
//echo $ogrenci->adsoyad;
//echo Ogrenciler::$sinif; // static dışardan çagrılması
//echo Ogrenciler::okul; // sabitin çagrılması



/*
class Hayvan {        //snıfı
    public $tuyrengi;    // özellik
    public $gozrengi;

    public function Yurume() {  // metot

    }

    public function koşma () {

    }
}

$kedi = new Hayvan;    // nesne
$kopek = new Hayvan;
*/
?>