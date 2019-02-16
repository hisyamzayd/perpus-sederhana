<!DOCTYPE html>
<html>
<head>
     <title>Perpus Sederhana</title>
</head>
<body>
    <h3>Selamat Datang di Perpus Sederhana</h3>
    <p><a href="user/login.php">Login</a></p>
    <p><a href="user/daftar.php">Daftar</a></p>
    <?php
        #menerima notif
        if (isset($_GET['status'])) {
            switch ($_GET['status']) {
                case "sukses_daftar" :
                    echo "Pendaftaran Berhasil!";
                    break;
                case "gagal_daftar" :
                    echo "Pendaftaran Gagal..";
                    break;
            }
        }
    ?>
</body>
</html>
