<?php

$adsoyad = $_POST["adsoyad"];

if ($adsoyad != "") {

   echo "Adı Soyadı:  $adsoyad"; 
} else {


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

    <form method="post" action="index.php">

        Ad Soyad : <input type="text" name="adsoyad">
        <br>
        <input type="submit" name="dugme" value="Gönder">
    
    </form>

</body>
</html>

<?php

}

?>

<!-- $adsoyad = $_GET["adsoyad"];

echo "Adı Soyadı:  $adsoyad";

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

    <form method="get" action="index.php">

        Ad Soyad : <input type="text" name="adsoyad">
        <br>
        <input type="submit" name="dugme" value="Gönder">
    
    </form>

</body>
</html> -->