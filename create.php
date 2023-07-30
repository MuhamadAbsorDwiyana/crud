<?php

require 'config.php';
global $conn;
if (isset($_POST['CREATE'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];

    $sql = "INSERT INTO Data VALUES(?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $nama, $nim, $kelas);

    if ($stmt->execute()) {
        echo 'DATA BERHASIL DI INPUT';
    } else {
        echo 'DATA GAGAL DI INPUT';
    }
    header("Location: index.php");
}
$conn->close();
