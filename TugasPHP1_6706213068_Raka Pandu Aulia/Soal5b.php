<?php

$nilai = 20;

if ($nilai >= 80 && $nilai <=100)
{
$hasilNilai = "A";
}

else if ($nilai >= 70 && $nilai <=79)
{
$hasilNilai = "B";
}

else if ($nilai >= 60 && $nilai <=69)
{
$hasilNilai = "C";
}

else if ($nilai >= 50 && $nilai <=59)
{
$hasilNilai = "D";
}

else
{
$hasilNilai = "E";
}

echo "Nilai angka = $nilai <br>";
echo "Nilai huruf = $hasilNilai <br>";
?>