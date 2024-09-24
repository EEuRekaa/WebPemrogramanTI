<?php
// 1
$a = 10;
$b = 5;
$c = $a + $b;
$d = $b + (10 * 5);
$e = $d - $c;

echo "variable a = {$a} <br>";
echo "variable b = {$b} <br>";
echo "variable c = {$c} <br>";
echo "variable d = {$d} <br>";
echo "variable e = {$e} <br>";

var_dump($e);
echo "<br><hr>";

// 2
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndoensia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndoensia) / 3;

echo "Matematika = $nilaiMatematika <br>";
echo "IPA = $nilaiIPA <br>";
echo "Bahasa Indonesia = $nilaiBahasaIndoensia <br>";
echo "Rata-rata = $rataRata <br>";

var_dump($rataRata);
echo "<br><hr>";

// 3
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br><hr>";

// 4
$namaDepan = "Rika";
$namaBelakang = "Otori";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;
echo "<br><hr>";

// 5
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[1];
