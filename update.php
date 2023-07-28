<?php

require 'config.php';

if (isset($_POST['UPDATE'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $nimid = $_POST['nimid'];

    $sql = "UPDATE Data SET nama = ?, nim = ?, kelas = ? WHERE nim = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $nama, $nim, $kelas, $nimid);

    if ($stmt->execute()) {
        echo 'DATA BERHASIL DI UPDATE';
    } else {
        echo 'DATA GAGAL DI UPDATE';
    }
    header("Location: index.php");
}
$conn->close();
?>