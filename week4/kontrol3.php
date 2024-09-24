<?php
$poinPemain = 600;
$totalSkor = $poinPemain;
$dapatHadiah = ($totalSkor > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: " . $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $dapatHadiah;