<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

array_splice($nilaiSiswa, 0, 2);
array_splice($nilaiSiswa, -2);

$totalNilai = array_sum($nilaiSiswa);


$jumlahSiswa = count($nilaiSiswa);

$rataRata = $totalNilai / $jumlahSiswa;

echo "Total nilai setelah dihapus: " . $totalNilai . "<br>";
echo "Jumlah siswa setelah dihapus: " . $jumlahSiswa . "<br>";
echo "Rata-rata nilai: " . $rataRata;