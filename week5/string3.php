<?php
$pesan = "saya arek malang";

// Ubah variabel $pesan menjadi array dengan perintah explode, memisahkan berdasarkan spasi
$pesanPerKata = explode(" ", $pesan);

// Ubah setiap kata dalam array menjadi kebalikannya menggunakan fungsi anonim
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);

// Gabungkan kembali array menjadi string dengan spasi sebagai pemisah
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>