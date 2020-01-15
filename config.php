<?php
$databaseHost       = 'localhost';
$databaseName       = 'crud_php_sederhana';
$databaseUsername   = 'root';
$dataPassword       = 'p@ssw0rd';

$jenis_kelamin = ['Laki-laki', 'Perempuan'];

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $dataPassword, $databaseName);
