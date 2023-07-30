<?php

require 'config.php';
require 'class.php';
global $conn;

$sql = "SELECT * FROM Data";
$stmt = $conn->query($sql);

if ($stmt->num_rows > 0) {
    while ($row = $stmt->fetch_assoc()) {
        $row['nim'] = new Mahasiswa($row['nama'],$row['nim'],$row['kelas']);
    }
} else {
    echo "Database kosong";
}
$conn->close();