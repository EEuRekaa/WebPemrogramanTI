<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$total_harga = null;
$selected_discount = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipe = $_POST['tipe'];
    $lantai = (int)$_POST['lantai'];
    $hari = (int)$_POST['hari'];
    $diskon = $_POST['diskon'];

    if ($tipe == 'standard') {
        $harga_per_hari = 300000;
    } elseif ($tipe == 'superior') {
        $harga_per_hari = 400000;
    } else {
        $harga_per_hari = 500000;
    }

    $total_harga = $harga_per_hari * $hari;

    if ($lantai > 5) {
        $total_harga += 50000;
    }

    if ($diskon == 'member') {
        $total_harga -= $total_harga * 0.1;
        $selected_discount = "Member (10%)";
    } elseif ($diskon == 'promo_hut') {
        $total_harga -= 100000;
        $selected_discount = "Promo HUT (-100.000)";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeRoom Hotel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="cekHarga.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DeRoom Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cekHarga.php">Cek Harga</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="sessionLogout.php" class="btn btn-danger">Logout</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <h2 class="text-center">Cek Harga Penginapan</h2>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe Kamar</label>
                    <select name="tipe" id="tipe" class="form-select">
                        <option value="standard">Standard (300.000)</option>
                        <option value="superior">Superior (400.000)</option>
                        <option value="deluxe">Deluxe (500.000)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="lantai" class="form-label">Lantai</label>
                    <input type="number" name="lantai" id="lantai" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="hari" class="form-label">Jumlah Hari</label>
                    <input type="number" name="hari" id="hari" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="diskon" class="form-label">Diskon</label>
                    <select name="diskon" id="diskon" class="form-select">
                        <option value="tidak_ada">Tidak Ada</option>
                        <option value="member">Member (10%)</option>
                        <option value="promo_hut">Promo HUT (-100.000)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Cek Harga</button>
            </form>

            <div class="popup" id="popup-result" style="display: none;">
                <div class="popup-content">
                    <span class="close">&times;</span>
                    <h4>Total Harga Rp <span id="total-harga"></span></h4>
                    <p>Diskon: <span id="diskon"></span></p>
                    <p>Tipe Kamar: <span id="tipe-kamar"></span></p>
                    <p>Lantai: <span id="lantai"></span></p>
                    <p>Jumlah Hari: <span id="jumlah-hari"></span></p>
                </div>
            </div>

            <?php if ($total_harga !== null): ?>
                <hr>
                <h4 class="mt-4">Total Harga Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></h4>
                <p class="">Diskon <?php echo $selected_discount; ?></p>
                <p>Tipe Kamar: <?php echo $tipe; ?></p>
                <p>Lantai: <?php echo $lantai; ?></p>
                <p>Jumlah Hari: <?php echo $hari; ?></p>
            <?php endif; ?>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>