<?php
session_start();
include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= 'bootstrap/css/bootstrap.min.css' ?>">

    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= 'siswa.php' ?>">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col-6 mt-4">
        <form action="<?= 'aksi_tambah_user.php' ?>" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" autofocus>
                <small class="text-danger"><?= $_SESSION['message_nama'] ?></small>
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
                <small class="text-danger"><?= $_SESSION['message_unique'] ?></small>
                <small class="text-danger"><?= $pesan ?></small>
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" id="jk" name="jenis_kelamin">
                    <option selected>-- Pilih Jenis Kelamin --</option>
                    <?php foreach ($jenis_kelamin as $jk) : ?>
                        <option value="<?= $jk ?>"><?= $jk ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" name="submit" class="btn rounded-0 btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>