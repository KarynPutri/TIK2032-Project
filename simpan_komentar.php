<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $artikel = basename($_POST["artikel"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $komentar = htmlspecialchars($_POST["komentar"]);

    $stmt = $conn->prepare("INSERT INTO komentar (artikel, nama, komentar) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $artikel, $nama, $komentar);
    $stmt->execute();
    $stmt->close();

    header("Location: " . $artikel);
    exit();
}
?>