<?php
include("../config.php");

#cek apakah tombol sudah diklik atau belum
if (isset($_POST['login'])) {

    #inisialisasi variabel
    $nama_nim = filter_input(INPUT_POST, 'nama_nim', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    #buat query
    $sql = "SELECT * FROM user WHERE nama='$nama_nim' OR nim='$nama_nim'";
    $query = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($query);

    #apakah user terdaftar?
    if ($user) {

        #verifikasi password
        if (password_verify($password, $user['password'])) {

            #buat session
            session_start();
            $_SESSION["user"] = $user;

            #login sukses, alihkan ke timeline
            #... :p
            header('Location: ../timeline.php');
        } else {
            die("Password salah..");
        }
    } else {
       die("User tidak terdaftar..");
    }
} else {
    die("Akses dilarang..");
}

?>
