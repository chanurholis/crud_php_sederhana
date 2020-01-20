<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa");

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= 'bootstrap/css/bootstrap.min.css' ?>">

    <title>Mahasiswa</title>
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
        <div>
            <a href="<?= 'user_baru.php' ?>" class="btn rounded-0 btn-primary">User Baru</a>
        </div>
        <table class="table mt-3">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NISN</th>
                    <th scope="col">JK</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php foreach ($result as $r) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $r['nama'] ?></td>
                        <td><?= $r['nrp'] ?></td>
                        <td><?= $r['jenis_kelamin'] ?></td>
                        <td><a href="" class="badge badge-info">Edit</a><a style="margin-left: 5px;" href="<?= 'aksi_delete.php/' . $r['id'] ?>" class="badge badge-danger">Delete</a></td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>