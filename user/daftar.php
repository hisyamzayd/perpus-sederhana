<!DOCTYPE html>
<html>
<head>
    <title>Daftar User Baru | Perpus Sederhana</title>
</head>
<body>
    <form action="proses_daftar.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required/>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" required></textarea>
            </p>
            <p>
                <label for="nim">Nim : </label>
                <input type="text" name="nim" placeholder="Masukan NIM" required/>
            </p>
            <p>
                <label for="email">Email : </label>
                <input type="text" name="email" placeholder="Masukan Alamat Email" required/>
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="Masukan Password Akun" required/>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar"/>
            </p>
        </fieldset>
    </form>
</body>
</html>
