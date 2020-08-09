<div class="card container mt-5">
 <div class="card-body"> 
  <h2>Edit Data Anggota</h2>
  <hr>
 
  <a href="data-petugas.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <div class="clearfix"></div>

  <?php 
  $petugas = $conn->query("SELECT * FROM taruna WHERE id_user = '".$_GET['id']."'");
  $data = $petugas->fetch_assoc();
  ?>

  <form action="proses/proses-ubah-petugas.php" method="POST" class="mt-3" autocomplete="off">
    <div class="form-group">
      <label for="nama">Nama Anggota</label>
      <input type="text" name="nama" value="<?= $data['Name'] ?>" class="form-control" autofocus required>
    </div>
    <div class="form-group">
      <label for="username">Pangkat</label>
      <input type="text" name="pangkat" value="<?= $data['Pangkat'] ?>" class="form-control" autofocus required>
    </div>
    <div class="form-group">
      <label for="password">No AK</label>
      <input type="text" name="no_ak" value="<?= $data['No_AK'] ?>" class="form-control" required readonly>
    </div>
    <div class="form-group">
      <label for="sebagai">No Senjata</label>
      <input type="text" name="no_senjata" value="<?= $data['No_Senjata'] ?>" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="<?= $data['id_user'] ?>">
    <button type="submit" class="btn btn-primary float-right">Edit Anggota</button>
  </form>

 </div>
</div>