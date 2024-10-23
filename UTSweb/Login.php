<?php
session_start();
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $errors[] = 'Username dan Password Harus terisi';
    } elseif (strlen($password) < 5) {
        $errors[] = 'Password minimal 5 karakter';
    } elseif (!preg_match('/[0-9]/', $password)) {
        $errors[] = 'Password harus terdiri dari huruf dan angka';
    } else {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login DeRoom Hotel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-8 pt-lg-5">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="d-flex align-items-center">
                            <div class="card-body py-5 px-4 p-md-5">

                                <form method="POST" action="">
                                    <h4 class="fw-bold mb-4" style="color: #000000;">Login ke DeRoom Hotel</h4>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="inputemail">Username</label>
                                        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="inputpassword">Password</label>
                                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                    </div>
                                    <div>
                                        <?php if (!empty($errors)): ?>
                                            <p>
                                                <?php foreach ($errors as $error): ?>
                                            <p><?php echo $error; ?></p>
                                        <?php endforeach; ?>
                                        </p>
                                    <?php endif; ?>
                                    </div>

                                    <div class="d-flex justify-content-center pt-1 mb-4">
                                        <button class="btn btn-primary btn-rounded w-50" type="submit">Login</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>