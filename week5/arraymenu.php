<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"]
                ]
            ],
            ["nama" => "Kuliner"],
            ["nama" => "Hiburan"]
        ]
    ],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"]
];

function tampilkanMenuBertingkat(array $menu, $level = 1)
{
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>";
        echo $item['nama'];
        if (isset($item['subMenu'])) {
            // Jika ada submenu, panggil fungsi rekursif dengan level indentasi yang lebih dalam
            tampilkanMenuBertingkat($item['subMenu'], $level + 1);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
