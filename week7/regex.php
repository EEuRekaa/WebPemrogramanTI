<?php
$pattern = '/[o]{1,3}/';
$text = 'god is good. There are also very good things in life.';

if (preg_match_all($pattern, $text, $matches)) {
    echo "Kata yang cocok ditemukan: <br>";
    foreach ($matches[0] as $match) {
        echo "- $match<br>";
    }
} else {
    echo "Tidak ada kata yang cocok ditemukan.";
}

// $originalText = 'I like apple pie and apple juice.';
// $searchWord = 'apple';
// $replaceWord = 'banana';

// $pattern = '/' . $searchWord . '/';
// $newText = preg_replace($pattern, $replaceWord, $originalText);

// echo "Teks asli: " . $originalText . "<br>";
// echo "Teks baru: " . $newText;

// if (preg_match_all($pattern, $text, $matches)) {
//     echo "Angka yang ditemukan: <br>";
//     foreach ($matches[0] as $match) {
//         echo $match . "<br>";
//     }
// } else {
//     echo "Tidak ada yang cocok!";
// }
