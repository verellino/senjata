<div class="container mt-5">

 <div class="row">
  <div class="col">
   <h2>Data Pengambilan</h2>
  </div>
 </div> 

 <div class="clearfix"></div>

 <table class="table table-sm mt-3">
  <thead>
   <tr>
    <th>No</th>
    <th>Nama Senjata</th>
    <th>Jenis</th>
    <th>Jumlah Pinjam</th>
    <th>Tgl. Pinjam</th>
    <th>Tgl. Kembali</th>
    <th>Peminjam</th>
    <th>Petugas</th>
   </tr>
  </thead>
  <tbody>

   <?php foreach ($data_peminjaman as $data) :
   ?>

   <tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nomor_senjata']; ?></td>
    <td><?= $data['jenis']; ?></td>
    <td><?= $data['jumlah']; ?></td>
    <td><?= $data['tgl_pinjam']; ?></td>
    <td><?= $data['tgl_kembali']; ?></td>
    <td><?= $data['peminjam']; ?></td>
    <td><?= $data['nama']; ?></td>
   </tr>

   <?php endforeach; ?>

  </tbody>
 </table>
</div>