<?php

$rumus_keliling = "(panjang * 2) + (panjang * 2)";
$rumus_luas = "panjang * lebar";
$panjang = 10;
$lebar = 15;

$hitung_keliling = ($panjang * 2) + ($panjang * 2);
$hitung_lebar = $panjang * $lebar;

echo "rumus untuk menghitung keliling persegi panjang adalah : $rumus_keliling <br>";
echo "rumus untuk menghitung luas persegi panjang adalah : $rumus_luas <br><br>";
echo "persegi panjang yang memiliki lebar $lebar cm dan panjang $panjang cm, maka : <br>";
echo "keliling = $hitung_keliling <br>";
echo "Luas = $hitung_lebar <br>";

?>