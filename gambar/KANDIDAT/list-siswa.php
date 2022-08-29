<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Vooting Pemelihan Ketua Kelas</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah vooting</h3>
    </header>

    <nav>
        <a href="from-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Foto</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM kandidat";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['kelas']."</td>";
            echo "<td>".$siswa['visi']."</td>";
            echo "<td>".$siswa['misi']."</td>";
            echo "<td>".$siswa['foto']."</td>";

            echo "<td>";
            echo "<a href='from-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>