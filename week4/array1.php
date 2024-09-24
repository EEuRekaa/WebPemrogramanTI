<?php
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
foreach ($nilaiSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

$jumlahSiswa = count($nilaiSiswa);
$rataRataKelas = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: " . $rataRataKelas . "<br>";

echo "Daftar siswa yang nilainya di atas rata-rata:<br>";
foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRataKelas) {
        echo "- " . $siswa[0] . " (Nilai: " . $siswa[1] . ")<br>";
    }
}