<?php

$dosya = $_FILES["dosya"]["tmp_name"];
$isim = $_FILES["dosya"]["name"];

//$kontrol = "image/jpeg";
$kontrol = array("image/jpeg","image/jpg","image/gif", "image/png");

if ( in_array($_FILES["dosya"]["type"], $kontrol)) {

    if (move_uploaded_file($dosya,$isim)) {
        echo "Dosya yüklendi. ";
    } else {
        echo "Dosya yüklenemedi.";
    }
} else {
    echo "Sadece JPEG Resim yüklenebilir.  ";
}

?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form İşlemleri</title>
</head>
<body>

    <br><br><br>

    <form method="post" action="index.php" enctype="multipart/form-data" >

        Resim: <input type="file" name="dosya">
        <br>
        <input type="submit" name="dugme" value="Yükle">
    
    </form>

</body>
</html>

<!-- //çoklu yüklemek için

foreach($_FILES["dosya"]["name"] as $i => $name){
    if (move_uploaded_file($_FILES["dosya"]["tmp_name"][$i] .$name)) {
        echo "Dosya Yüklendi. " .$_FILES["dosya"]["name"][$i];
    } else {
        echo "Dosya Yüklenemedi. " .$_FILES["dosya"]["name"][$i];
    }
}

?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form İşlemleri</title>
</head>
<body>

    <br><br><br>

    <form method="post" action="index.php" enctype="multipart/form-data" >

        Resim: <input type="file" name="dosya[]" multiple>
        <br>
        <input type="submit" name="dugme" value="Yükle">
    
    </form>

</body>
</html> -->

<!-- // tekli dosya yüklemek için
$dosya = $_FILES["dosya"]["tmp_name"];
$yeniad = $_FILES["dosya"]["name"];

if ( move_uploaded_file($dosya, $yeniad)) {
    echo "Dosya Yüklendi. <br>
    <img src='$yeniad' height ='100'>
    <br>";
}else {
    echo "Hata oluştu.";
}

?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form İşlemleri</title>
</head>
<body>

    <br><br><br>

    <form method="post" action="index.php" enctype="multipart/form-data" >

        Resim: <input type="file" name="dosya">
        <br>
        <input type="submit" name="dugme" value="Yükle">
    
    </form>

</body>
</html> -->