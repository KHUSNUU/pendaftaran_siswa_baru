<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $visi= $_POST['visi'];
    $misi = $_POST['misi'];
    $foto = $_POST['foto'];

    // buat query
    $sql = "INSERT INTO kandidat (nama, kelas, visi, misi, foto) VALUE ('$nama', '$kelas', '$visi', '$misi', '$foto')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: home.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: home.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>