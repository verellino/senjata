<div class="container mt-5">
 
  <h2>Data Senjata</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>

  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>Nomor Senjata</th>
        <th>Nama Taruna</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data_barang as $senjata): ?>
      
      <tr>
        <td><?= $senjata['nomor_senjata']; ?>
        <td><?= $senjata['Name']; ?>
        <img class="float-right "alt="<?=$senjata['nomor_senjata']?>" src="../library/barcode.php?text=<?=$senjata['nomor_senjata']?>&print=true"/>
        </td>
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>