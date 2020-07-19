<div class="container mt-5">
 
  <h2>Detail Anggota</h2>
  <hr>
 
  <a href="data-petugas.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <div class="clearfix"></div>

  <div class="card mt-3">
    <div class="card-header">
      <?= $data['nama'] ?>
    </div>
    <div class="card-body">
      <p>Username : <?= $data['username'] ?></p>
      <p>Sebagai : <?= $sebagai ?></p>
    </div>
  </div>

</div>