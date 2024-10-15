<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = array();

    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    } elseif (strlen($nama) < 3) {
        $errors[] = "Nama harus minimal 3 karakter.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    if (!preg_match("/[A-Z]/", $password)) {
        $errors[] = "Password harus mengandung setidaknya satu huruf besar.";
    }
    if (!preg_match("/[a-z]/", $password)) {
        $errors[] = "Password harus mengandung setidaknya satu huruf kecil.";
    }
    if (!preg_match("/[0-9]/", $password)) {
        $errors[] = "Password harus mengandung setidaknya satu angka.";
    }
    if (!preg_match("/[^A-Za-z0-9]/", $password)) {
        $errors[] = "Password harus mengandung setidaknya satu karakter khusus.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim: Nama = $nama, Email = $email, Password = $password";
    }
}
