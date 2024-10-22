<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; //Direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

// if (isset($_POST["submit"])) {
//     $targetdir = "uploads/"; //Direktori tujuan untuk menyimpan file
//     $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
//     $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");
//     $maxsize = 3 * 1024 * 1024;

//     if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
//         if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
//             echo "File berhasil diunggah.<br><br>";
//             // Menampilkan file yg di upload
//             echo '<img src="' . $targetfile . '" width="200" />';
//         } else {
//             echo "Gagal mengunggah file.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
//     }
// }
    

// if (isset($_POST["submit"])) {
//     $targetdir = "uploads/"; //save uploaded file
//     $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");
//     $maxSize = 5 * 1024 * 1024;

//     if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxSize) {
//         if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
//             echo "File berhasil diunggah.";
//         } else {
//             echo "Gagal mengunggah file.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maximum yang diisikan";
//     }
// }

// if (isset($_POST["submit"])) {
//     $targetdir = "uploads/"; //save uploaded file
//     $targetfile = $targetdir.basename($_FILES["myfile"]["name"]);

//     if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
//         echo "File berhasil diunggah.";
//     } else {
//         echo "Gagal mengunggah file.";
//     }
// 