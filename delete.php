<?php

require 'config.php';

if (isset($_POST['DELETE'])) {
    $nim = $_POST['nim'];

    $sql = "DELETE FROM Data WHERE nim=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s',$nim);

    if ($stmt->execute()) {
        echo 'DATA BERHASIL DI HAPUS';
    } else {
        echo 'DATA GAGAL DI HAPUS';
    }
    header("Location: index.php");
}
$conn->close();
?>