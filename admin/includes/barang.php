<div class="container mt-5">
 <div class="card">
  <div class="card-body"> 
  <h2>Data Senjata</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <a href="?p=cetak_barcode" class="btn btn-success btn-sm float-right">Cetak Barcode</a>
  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>Nomor Senjata</th>
        <th>Nama Taruna</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data_barang as $senjata): ?>
      
      <tr>
        <td><?= $senjata['nomor_senjata']; ?>
        <td><?= $senjata['Name']; ?>
        <td>
          <div class="d-inline">
            <a href="?p=detail-barang&id=<?= $senjata['id_barang']; ?>" class="btn btn-primary btn-sm">Detail</a>
            <a href="?p=hapus-barang&id=<?= $senjata['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
          </div>
        </td>
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

  </div>
 </div>
</div>