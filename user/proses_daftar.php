<?php
include("../config.php");

#cek apakah tombol sudah diklik atau belum
if (isset($_POST['daftar'])) {

    #inisialisasi variabel
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $nim = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    #buat query
    $sql = "INSERT INTO user VALUES('$nama', '$alamat', '$nim', '$email', '$password')";
    $query = mysqli_query($db, $sql);

    #apakah query berhasil?
    if ($query) {
        header('Location: ../index.php?status=sukses_daftar');
    } else {
        header('Location: ../index.php?status=gagal_daftar');
    }
} else {
    die("Akses dilarang..");
}

?>
