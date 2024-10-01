<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        th {
            padding: 8px;
            background-color: lightblue;
            border: 1px solid black;
        }

        td {
            padding: 8px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ]
    ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <tr>
            <td><?php echo $Dosen['nama']; ?></td>
            <td><?php echo $Dosen['domisili']; ?></td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>

</html>