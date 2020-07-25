<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../../index.php');
}

$name = $_POST['Name'];
$pangkat = $_POST['Pangkat'];
$no_ak = $_POST['No_AK'];
$no_senjata = $_POST['No_Senjata'];
$id = $_POST['id'];

$update = $conn->query("UPDATE taruna SET `id_user`= '',`Name`='$name',`Pangkat`='$pangkat',`No_AK`='$no_ak',`No_Senjata`= 'no_senjata' WHERE id_user = '".$id."'");

if ($update) {
  header('Location: ../data-petugas.php');
} else {
  header('Location: ../data-petugas.php?h=edit-petugas');
}