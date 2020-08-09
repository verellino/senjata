<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../index.php');
}

// Mengelurkan seluruh data barang yang ada di Database
$new = "UPDATE senjata INNER JOIN taruna ON senjata.id_barang = taruna.id_user SET  senjata.nomor_senjata = taruna.No_Senjata";
$query = $conn->query($new);
$sql = "SELECT * FROM senjata RIGHT JOIN taruna ON senjata.nomor_senjata = taruna.No_Senjata";
$query = $conn->query($sql);
$data_barang = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';

if (!isset($_GET['p'])) {
  require_once 'includes/barang.php'; 
} else if ($_GET['p'] == 'tambah-barang') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'cetak_barcode') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'detail-barang') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'edit-barang') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'hapus-barang') {
 
  $hapus = $conn->query("DELETE FROM senjata WHERE id_barang='".$_GET['id']."'");
  if ($hapus) {
    header('Location: data-barang.php');
  } else {
    header('Location: data-barang.php');
  }
}

require_once 'includes/footer.php';