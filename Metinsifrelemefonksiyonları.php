<?php

$metin = "Mahmet Selçuk Batal";

echo "MD5 Şifreleme:" . md5($metin) . "<br>";
echo "SHA1 Şifreleme:" . sha1($metin) ."<br>";
echo sha1(md5($metin))."<br>";
echo "CRC32 Şifreleme:" . crc32($metin) ."<br>";
echo "BASE64 Şifreleme:" . base64_encode($metin) ."<br>";
echo "BASE64 Çözme:" . base64_decode(base64_encode($metin));
?>