<?php

session_start();
require_once '../../config/db.php';

if(!isset($_SESSION['user'])) {
 header('Location: ../../index.php');
}

$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$ruang = $_POST['ruang'];
$kondisi = $_POST['kondisi'];
$ket = $_POST['ket'];
$tgl_regis = date('Y-m-d');
$petugas = $_SESSION['id_user'];

if(!isset($nama_barang, $jenis, $jumlah, $ruang, $kondisi, $ket)) {
  header('Location: ../data-barang.php?p=tambah-barang');
}

$sql = "INSERT INTO senjata VALUES ('', '$nama_barang', '$kondisi', '$ket', '$jumlah', '$jenis', '$tgl_regis', '$ruang', '$petugas')";
$query = $conn->query($sql);

if($query) {
  header('Location: ../data-barang.php');
} else {
  header('Location: ../data-barang.php?p=tambah-barang');
}