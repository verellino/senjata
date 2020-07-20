<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../index.php');
}

// Mengelurkan seluruh data barang yang ada di Database
$sql = "SELECT * FROM senjata LEFT JOIN users ON senjata.id_user = users.id_user";
$query = $conn->query($sql);
$data_barang = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';

if (!isset($_GET['p'])) {
  require_once 'includes/barang.php'; 
} else if ($_GET['p'] == 'detail-barang') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} 
require_once 'includes/footer.php';