<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'dbMahasiswa';
$conn = new mysqli($host, $user, $pass, $db_name);
if ($conn->connect_error) {
    die('koneksi gagal'.$conn->connect_error);
}
