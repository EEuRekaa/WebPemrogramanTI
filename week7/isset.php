<?php
$umur;

if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}

echo "<br><br>";

$data = array("nama" => "Jane", "usia" => 25);

if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
    echo "<br>";
    echo "Usia: " . $data["usia"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
