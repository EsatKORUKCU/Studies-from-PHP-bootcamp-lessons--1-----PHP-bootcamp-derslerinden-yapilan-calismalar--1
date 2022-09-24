<?php

session_start();

$_SESSION["kitap"] = "Atatürk";
$_SESSION["yıl"] = "2020";

echo "Kitap Adı:" . $_SESSION["kitap"] . "<br>";

echo "Basım yılı: " . $_SESSION["yıl"];

if (isset($_SESSION["kitap"])) {
    echo "oturum bulundu.";
}

if (empty($_SESSION["yıl"])) {

}

unset ($_SESSION["kitap"],["yıl"]); // tek tek siler

//session_destroy8(); // toptan siler




?>