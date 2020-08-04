<div class="container mt-5">
 <div class="card">
  <div class="card-body">  
    <h2>Data Taruna</h2>
    <hr>

    <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
    <a href="?p=tambah-petugas" class="btn btn-primary btn-sm float-right">Tambah taruna</a>
    <div class="clearfix"></div>

    <table class="table table-sm mt-3">
      <thead>
        <tr>
  <th>No</th>
  <th>Nama Taruna</th>
  <th>Pangkat</th>
  <th>No. AK</th>
  <th>No. Senjata</th>
  <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($data as $r): 
        ?>
  <tr>
  <td><?= $r['id_user'] ?></td>
  <td><?= $r['Name'] ?></td>
  <td><?= $r['Pangkat'] ?></td>
  <td><?= $r['No_AK'] ?></td>
  <td><?= $r['No_Senjata'] ?></td>
    <td>
      <div class="d-inline">
      <a href="?p=detail-petugas&id=<?= $r['id_user'] ?>" class="btn btn-primary btn-sm">Detail</a>
      <a href="?p=edit-petugas&id=<?= $r['id_user'] ?>" class="btn btn-success btn-sm">Edit</a>
      <a href="?p=hapus-petugas&id=<?= $r['id_user'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
      </div>
  </td>
  </tr>
        
        <?php endforeach ?>
      </tbody>
    </table>

  </div>
 </div>
</div>