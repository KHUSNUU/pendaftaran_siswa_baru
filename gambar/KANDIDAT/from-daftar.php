<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="kelas">Kelas: </label>
            <input type="kelas" placeholder="kelas" />
        </p>
        <p>
            <label for="visi">Visi: </label>
            <input type="text" name="visi" placeholder="visi" />
        </p>
        <p>
            <label for="misi">Misi: </label>
            <input type="text" name="misi" placeholder="misi" />
        </p>
        <p>
            <label for="foto">Foto: </label>
            <input type="text" name="foto" placeholder="foto" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>