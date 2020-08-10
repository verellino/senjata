<div class="container mt-5">
 <div class="card">
  <div class="card-body">
    <h2>Data Pengambilan</h2>

    <div class="clearfix"></div>

    <table class="table table-sm mt-3">
    <thead>
    <tr>
        <th>No</th>
        <th>Nomor Senjata</th>
        <th>Tgl. Ambil</th>
        <th>Nama Taruna</th>
        <th>Waktu Ambil</th>
        <th>Waktu Kembali</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($data_peminjaman as $data) :
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['No_Senjata']; ?></td>
        <td><?= $data['tgl_ambil']; ?></td>
        <td><?= $data['Name']; ?></td>
        <td><?= $data['jam_ambil']; ?></td>
        <td><?= $data['jam_kembali']; ?></td>
        <td>
        <?php 
          $jmlh = $data['jumlah'];
            
          if ($jmlh == '0') {
            echo "Sedang diambil";
          } else {
            echo "Sudah kembali"; 
          }  
          ?></td>
    </tr>

    <?php endforeach; ?>

    </tbody>
    </table>
  </div>
 </div>
</div>