<!DOCTYPE html>
<html>
<head>
    <title>Login User | Perpus Sederhana</title>
</head>
<body>
    <form action="proses_login.php" method="post">
        <fieldset>
            <p>
                <label for="nama_nim">Nama / NIM : </label>
                <input type="text" name="nama_nim" required/>
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" required/>
            </p>
            <p>
                <input type="submit" value="Login" name="login"/>
            </p>
        </fieldset>
    </form>
</body>
</html>
