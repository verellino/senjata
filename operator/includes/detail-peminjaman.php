<div class="container mt-5">
 <div class="card">
  <div class="card-body">
    <h2>Data Pengambilan</h2>

    <div class="clearfix"></div>

    <table class="table table-sm mt-3">
    <thead>
    <tr>
        <th>Nomor Senjata</th>
        <th>Tgl. Ambil</th>
        <th>Nama Taruna</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($data_peminjaman as $data) :
    ?>

    <tr>
        <td><?= $data['No_Senjata']; ?></td>
        <td><?= $data['tgl_ambil']; ?></td>
        <td><?= $data['Name']; ?></td>
    </tr>

    <?php endforeach; ?>

    </tbody>
    </table>
  </div>
 </div>
</div>