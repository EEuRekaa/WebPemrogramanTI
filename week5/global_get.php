<?php
// Mendapatkan nilai dari URL
$nama = $_GET['nama'] ?? 'Anda';
$usia = $_GET['usia'] ?? '';

// Validasi input (opsional)
if (empty($nama)) {
    echo "Nama tidak boleh kosong";
} else if (empty($usia)) {
    echo "Usia tidak boleh kosong";
} else {
    echo "Halo $nama! Apakah benar anda berusia $usia tahun?";
}
