<?php
$input = $_POST['input'];
$email = $_POST['email'];

$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

echo $input;
echo '<br>';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Alamat email $email valid.";
} else {
    echo "Alamat email tidak valid.";
}
