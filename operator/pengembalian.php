<link rel="stylesheet" href="assets/css/main.css">
<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
 header('Location: ../index.php');
}

require_once 'proses/proses-peminjaman.php';

// Mengelurkan seluruh data barang yang ada di Database
$sql = "SELECT * FROM senjata LEFT JOIN taruna ON senjata.id_user = taruna.id_user WHERE jumlah = 0";
$query = $conn->query($sql);
$data_barang  = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';
require_once 'includes/kembali.php';
require_once 'includes/footer.php';