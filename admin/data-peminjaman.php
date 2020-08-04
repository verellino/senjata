<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
 header('Location: ../index.php');
}

// ambil data
$sql = "SELECT * FROM peminjaman AS d INNER JOIN senjata AS b ON d.id_user = b.id_user";
$query = $conn->query($sql);
$data_peminjaman = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;


require_once 'includes/header.php';

if(!isset($_GET['p'])) {
 require_once 'includes/detail-peminjaman.php';
} else {
 if($_GET['p'] == 'cetak') {
  require_once 'includes/cetak-data-peminjaman.php';
 } else {
  require_once 'includes/detail-peminjaman.php';
 }
}

require_once 'includes/footer.php';