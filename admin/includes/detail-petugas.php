<div class="container mt-5">
 
  <h2>Detail Anggota</h2>
  <hr>
 
  <a href="data-petugas.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <div class="clearfix"></div>
  <?php 
   $sql = $conn->query("SELECT * FROM taruna WHERE id_user = '".$_GET['id']."'");
   $data = $sql->fetch_assoc();
 ?>
  <div class="card mt-3">
    <div class="card-header">
      <h2><?= $data['Name'] ?></h2>
    </div>
    <div class="card-body">
      <p>Pangkat : <?= $data['Pangkat'] ?></p>
      <p>Nomor Akademi : <?= $data['No_AK'] ?></p>
      <p>Nomor Senjata : <?= $data['No_Senjata'] ?></p>
    </div>
  </div>

</div>