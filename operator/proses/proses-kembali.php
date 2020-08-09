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
  $id_barang = $dt_barang['id_barang'];
  
  $update_dt_brg = $conn->query("UPDATE senjata SET jumlah = 1 WHERE id_barang = '$id_barang'");
  $update_pinjam = $conn->query("UPDATE `peminjaman` SET `jam_kembali`= CURRENT_TIME WHERE id_user = '$id_barang'");
 } 
 unset($_SESSION['list_peminjaman']);
 header('Location: ../data-peminjaman.php');
}