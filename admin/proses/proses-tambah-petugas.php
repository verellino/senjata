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

$sql = "INSERT INTO taruna VALUES ('', '$name', '$pangkat', '$no_ak', '$no_senjata')";
$query = $conn->query($sql);

if ($query) {
  header('Location: ../data-petugas.php');
} else {
  header('Location: ../data-petugas.php?h=tambah-petugas');
}