<?php

// Mengatur zona waktu menjadi Asia/Jakarta
date_default_timezone_set("Asia/Jakarta");

// Membuat koneksi ke database MySQL
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Mengecek apakah koneksi gagal
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
