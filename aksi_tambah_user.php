<?php
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $nrp = htmlspecialchars($_POST['nrp']);
    $jk = htmlspecialchars($_POST['jenis_kelamin']);

    // Include Database
    include_once("config.php");

    // Insert Query
    mysqli_query($mysqli, "INSERT INTO mahasiswa(nama, nrp, jenis_kelamin) VALUES ('$nama','$nrp','$jk')");

    header('location: index.php');
}
