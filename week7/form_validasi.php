<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <input type="checkbox" onclick="myFunction()">Show Password<br>

        <input type="submit" value="Submit">
    </form>

    <div id="result"></div>

    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();

                if (nama.length < 3 || email === "" || !isValidEmail(email)) {
                    $("#nama-error").text(nama.length < 3 ? "Nama harus minimal 3 karakter." : "");
                    $("#email-error").text(email === "" ? "Email harus diisi." : (isValidEmail(email) ? "" : "Format email tidak valid."));
                    $("#password-error").text(password.length < 8 ? "Password harus minimal 8 karakter." : "");
                } else {
                    // Kirim data ke server menggunakan AJAX
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            $("#result").html(response);
                        },
                        error: function(xhr, status, error) {
                            console.error("Terjadi kesalahan:", error);
                        }
                    });
                }
            });

            function isValidEmail(email) {
                var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return regex.test(email);
            }
        });
    </script>
</body>

</html>