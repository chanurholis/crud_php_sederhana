<?php
include_once("config.php");

if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $nrp = htmlspecialchars($_POST['nrp']);
    $jk = htmlspecialchars($_POST['jenis_kelamin']);

    $hasil_cek = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE nrp = '$nrp'");

    $array = mysqli_fetch_array($hasil_cek);

    $cek_akhir = $array['nrp'];

    if ($nama == NULL) {
        $_SESSION['message_nama'] = 'Nama harus diisi.';
        header('location: user_baru.php');
    } else {
        if ($nrp == $cek_akhir) {
            $_SESSION['message_unique'] = 'Data sudah digunakan.';
            $pesan = 'Data sudah digunakan.';
            header('location: user_baru.php');
        } else {
            // Include Database
            include_once("config.php");

            // Insert Query
            $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nama,nrp,jenis_kelamin) VALUES('$nama','$nrp','$jk')");

            header('location: index.php');
        }
    }
}
