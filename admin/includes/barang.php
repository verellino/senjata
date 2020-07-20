<div class="container mt-5">
 
  <h2>Data Senjata</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <a href="?p=tambah-barang" class="btn btn-primary btn-sm float-right">Tambah Data</a>

  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Senjata</th>
        <th>Kondisi</th>
        <th>Jumlah</th>
        <th>Jenis</th>
        <th>Taruna</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data_barang as $senjata): ?>
      
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $senjata['nama_barang']; ?>
        <td><?= $senjata['kondisi']; ?>
        <td><?= $senjata['jumlah']; ?>
        <td><?= $senjata['jenis']; ?>
        <td><?= $senjata['nama']; ?>
        <td>
          <div class="d-inline">
            <a href="?p=detail-barang&id=<?= $senjata['id_barang']; ?>" class="btn btn-primary btn-sm">Detail</a>
            <a href="?p=edit-barang&id=<?= $senjata['id_barang']; ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="?p=hapus-barang&id=<?= $senjata['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
          </div>
        </td>
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>