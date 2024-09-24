<?php
// 1
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil pengurangan: " . $hasilkurang . "<br>";
echo "Hasil perkalian: " . $hasilKali . "<br>";
echo "Hasil pembagian: " . $hasilBagi . "<br>";
echo "Sisa bagi: " . $sisaBagi . "<br>";
echo "Hasil pangkat: " . $pangkat . "<br>";
echo "<br><hr>";

// 2
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama: $hasilSama <br>";
echo "Hasil tidak sama: $hasilTidakSama <br>";
echo "Hasil lebih kecil: $hasilLebihKecil <br>";
echo "Hasil lebih besar: $hasilLebihBesar <br>";
echo "Hasil lebih kecil sama dengan: $hasilLebihKecilSama <br>";
echo "Hasil besar kecil sama dengan: $hasilLebihBesarSama <br>";
echo "<br><hr>";

// 3
$a = true;
$b = false;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a dan b): ";
echo ($hasilAnd) ? "Benar" : "Salah";
echo "<br>";

echo "Hasil OR (a atau b): ";
echo ($hasilOr) ? "Benar" : "Salah";
echo "<br>";

echo "Hasil NOT a: ";
echo ($hasilNotA) ? "Benar" : "Salah";
echo "<br>";

echo "Hasil NOT b: ";
echo ($hasilNotB) ? "Benar" : "Salah";
echo "<br>";
echo "<br><hr>";

// 4
$a += $b;
echo "Hasil penjumlahan dan penugasan: $a <br>";

$a -= $b;
echo "Hasil pengurangan dan penugasan: $a <br>";

$a *= $b;
echo "Hasil perkalian dan penugasan: $a <br>";

$a /= $b;
echo "Hasil pembagian dan penugasan: $a <br>";

$a %= $b;
echo "Hasil modulus dan penugasan: $a <br>";
echo "<br><hr>";

// 5
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? ";
echo ($hasilIdentik) ? "Ya" : "Tidak";
echo "<br>";

echo "Apakah a tidak identik dengan b? ";
echo ($hasilTidakIdentik) ? "Ya" : "Tidak";
echo "<br>";
