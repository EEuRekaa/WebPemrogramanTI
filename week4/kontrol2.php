<?php
$hargaAwal = 120000;
$diskon = 20;
$jumlahDiskon = ($hargaAwal * $diskon) / 100;

$hargaAkhir = $hargaAwal - $jumlahDiskon;

echo "Harga awal produk: Rp " . number_format($hargaAwal,0,',','.') . "<br>";
echo "Jumlah diskon: Rp " . number_format($jumlahDiskon,0,',','.') . "<br>";
echo "Harga akhir setelah diskon: Rp " . number_format($hargaAkhir,0,',','.');