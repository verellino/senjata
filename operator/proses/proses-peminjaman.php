<?php
if (!isset($_SESSION)) {
  session_start();  
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dt_pinjam = NULL;

if(isset($_POST['submit']) && isset($_SESSION['list_peminjaman'])) {
    require_once '../../config/db.php';
    foreach ($_SESSION['list_peminjaman'] as $list) {
  $nomor_senjata = $list['nomor_senjata'];
  $senjata = $conn->query("SELECT * FROM senjata WHERE nomor_senjata='$nomor_senjata'");
  $dt_barang = $senjata->fetch_assoc();
  $tgl_ambil = date('Y-m-d');
  $id_barang = $dt_barang['id_barang'];

  $peminjaman = $conn->query("INSERT INTO peminjaman VALUES ('', '$id_barang', '$tgl_ambil', CURTIME(), '')");
  $update_dt_brg = $conn->query("UPDATE senjata SET jumlah = 0 WHERE id_barang = '$id_barang'");
 } 
 unset($_SESSION['list_peminjaman']);
 header('Location: ../data-peminjaman.php');
}