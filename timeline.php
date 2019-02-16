<?php
#cek session
require_once("user/auth.php");
include("config.php");
echo "Selamat Datang ".$_SESSION['user']['nama'];
echo "<p><a href='user/logout.php'>Logout</a></p>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Sinopsis</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th>Tahun</th>
            <th>ISBN</th>
            <th>Jumlah</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        
        <!-- kode php -->
        <?php 
            #atur query
            $sql = "SELECT * FROM buku WHERE jumlah>0";
            $query = mysqli_query($db, $sql);
        
            #fungsi while
            while ($buku = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                    echo "<td>".$buku['id_buku']."</td>";
                    echo "<td>".$buku['judul']."</td>";
                    echo "<td>".$buku['sinopsis']."</td>";
                    echo "<td>".$buku['penerbit']."</td>";
                    echo "<td>".$buku['pengarang']."</td>";
                    echo "<td>".$buku['tahun']."</td>";
                    echo "<td>".$buku['isbn']."</td>";
                    echo "<td>".$buku['jumlah']."</td>";
                    echo "<td>";
                    echo "<a href='user/pinjam.php?id=".$buku['id_buku']."'>Pinjam</a>";
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>