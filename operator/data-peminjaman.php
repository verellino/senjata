<link rel="stylesheet" href="assets/css/main.css">
<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
 header('Location: ../index.php');
}

// ambil data
$sql = "SELECT * FROM peminjaman LEFT JOIN taruna ON peminjaman.id_user = taruna.id_user ";
$query = $conn->query($sql);
$data_peminjaman = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';
require_once 'includes/detail-peminjaman.php';
require_once 'includes/footer.php';