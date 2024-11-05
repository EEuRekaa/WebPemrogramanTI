<?php
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

if (mysqli_connect_errno()) {
    die("Koneksi database gaga: " . mysqli_connect_error());
}
