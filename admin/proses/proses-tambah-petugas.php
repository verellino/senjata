<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../../index.php');
}

$name = $_POST['nama'];
$pangkat = $_POST['pangkat'];
$no_ak = $_POST['no_ak'];
$no_senjata = $_POST['no_senjata'];

if (!isset($name, $pangkat, $no_ak, $no_senjata)) {
  header('Location: ../petugas.php?h=tambah-petugas');
}
$snjt = $conn->query("INSERT INTO `senjata`(`id_barang`, `id_user`, `nomor_senjata`, `jumlah`) VALUES ('','','$no_senjata','1')");
$sql = "INSERT INTO taruna VALUES ('', '$name', '$pangkat', '$no_ak', '$no_senjata')";
$query = $conn->query($sql);
$new = $conn->query("UPDATE senjata, taruna SET senjata.id_user = taruna.id_user WHERE  senjata.nomor_senjata = taruna.No_Senjata");

if ($query) {
  header('Location: ../data-petugas.php');
} else {
  header('Location: ../data-petugas.php?h=tambah-petugas');
}