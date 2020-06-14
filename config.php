<?php

$server = "localhost";
$user = "root";
$password = "helloworld";
$nama_database = "erfan";

$mysqli = mysqli_connect($server, $user, $password, $nama_database);

if( !$mysqli ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>