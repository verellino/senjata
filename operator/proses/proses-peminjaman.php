<?php

$dt_pinjam = NULL;

if(isset($_POST['submit']) && isset($_SESSION['list_peminjaman'])) {
 foreach ($_SESSION['list_peminjaman'] as $list) {
  $nomor_senjata = $list['nomor_senjata'];

  $senjata = $conn->query("SELECT * FROM senjata WHERE nomor_senjata='$nomor_senjata'");
  $dt_barang = $senjata->fetch_assoc();
  $sisa = 0;

  $update_dt_brg = $conn->query("UPDATE senjata SET jumlah = '$sisa' WHERE id_barang = '$dt_barang[id_barang]'");

  $tgl_ambil = date('d-m-Y');
  $id_user = $dt_barang['id_barang'];

  $peminjaman = $conn->query("INSERT INTO peminjaman VALUES ('', '$id_user', '$tgl_ambil')");
  $update_dt_brg = $conn->query("UPDATE senjata SET jumlah = '$sisa' WHERE id_barang = '$dt_barang[id_barang]'");
 } 
 unset($_SESSION['list_peminjaman']);
}