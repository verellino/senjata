<div class="container mt-5">
 
  <h2>Data Senjata</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>

  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Senjata</th>
        <th>Nomor Senjata</th>
        <th>Nama Taruna</th>
        <th>Jenis</th>
        <th>Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data_barang as $senjata): ?>
      
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $senjata['nama_barang']; ?>
        <td><?= $senjata['nomor_senjata']; ?>
        <td><?= $senjata['nama']; ?>
        <td><?= $senjata['jenis']; ?>
        <td><?= $senjata['jumlah']; ?>
        </td>
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>