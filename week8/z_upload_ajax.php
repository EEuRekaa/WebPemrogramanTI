<?php
// Cek apakah ada file yang diunggah (karena multiple upload, jadi di cek sebagai array)
if (isset($_FILES['files']['name'])) {
    $errors = array();
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif'); // Ekstensi gambar yang diizinkan

    // Loop untuk setiap file yang diunggah
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];

        // Mendapatkan ekstensi file
        $file_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_parts));

        // Validasi ekstensi file
        if (in_array($file_ext, $allowed_ext) === false) {
            $errors[] = "Ekstensi file yang diizinkan hanya JPG, JPEG, PNG, atau GIF.";
        }

        // Validasi ukuran file (misal, maksimal 2 MB)
        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
        }

        // Jika tidak ada error, pindahkan file
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "File " . $file_name . " berhasil diunggah.<br>";
        } else {
            print_r($errors);
        }
        // Reset array error untuk file berikutnya
        $errors = array();
    }
}
// if (isset($_FILES['file']['name'])) {
//     $errors = array();
//     $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
//     $file_name = $_FILES['file']['name'];
//     $file_size = $_FILES['file']['size'];
//     $file_tmp = $_FILES['file']['tmp_name'];
//     $file_type = $_FILES['file']['type'];
//     $file_parts = explode('.', $_FILES['file']['name']);
//     $file_ext = strtolower(end($file_parts));
//     $extensions = array("pdf", "doc", "docx", "txt");

//     if (in_array($file_ext, $extensions) === false) {
//         $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
//     }

//     if ($file_size > 2097152) {
//         $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
//     }

//     if (empty($errors) == true) {
//         move_uploaded_file($file_tmp, "documents/" . $file_name);
//         echo "File berhasil diunggah.";
//     } else {
//         echo implode("", $errors);
//     }
// }
