
<div class="container mt-5">
 
 <h2>Detail Data Senjata</h2>
 <hr>

 <a href="data-barang.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
 <div class="clearfix"></div>

 <?php 
   $sql = $conn->query("SELECT * FROM senjata INNER JOIN users WHERE id_barang = '".$_GET['id']."'");
   $data = $sql->fetch_assoc();
 ?>

 <div class="card mt-3">
   <div class="card-header">
     <?= $data['nama_barang'] ?>
   </div>
   <div class="card-body">
     <p>Jenis Senjata : <?= $data['jenis'] ?></p>
     <p>Jumlah : <?= $data['jumlah'] ?></p>
     <p>Kondisi : <?= $data['kondisi'] ?></p>
     <p>Tgl. Registrasi : <?= $data['tgl_regis'] ?></p>
     <p>Ruang : <?= $data['ruang'] ?></p>
     <p>Petugas : <?= $data['nama'] ?></p>
   </div>
 </div>

</div>