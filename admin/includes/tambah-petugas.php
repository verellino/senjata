<div class="card container mt-5">
 <div class="card-body"> 
  <h2>Tambah Data Anggota</h2>
  <hr>
 
  <a href="data-petugas.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <div class="clearfix"></div>

  <form action="proses/proses-tambah-petugas.php" method="POST" class="mt-3" autocomplete="off">
    <div class="form-group">
      <label for="nama">Nama Anggota</label>
      <input type="text" name="nama" placeholder="Nama Petugas" class="form-control" autofocus required>
    </div>
    <div class="form-group">
      <label for="pangkat">Pangkat</label>
      <input type="text" name="pangkat" placeholder="Masukan Pangkat" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="no_ak">No AK</label>
      <input type="text" name="no_ak" placeholder="Masukan Nomor Akademi" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="no_senjata">No Senjata</label>
      <input type="text" name="no_senjata" placeholder="Masukan Nomor Senjata" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary float-right">Tambah Anggota</button>
  </form>
  </div>
</div>