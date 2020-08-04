<div class="container mt-5">
 <div class="card">
  <div class="card-body">
  <h2>Pengembalian Senjata</h2>
    <hr>
   <div class="row">
    <div class="col-md-6">
     <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-3" autocomplete="on">
      <div class="form-group">
       <label for="id_barang"><h5>Nomor Senjata</h5></label>
       <input id="barcodeInput" list="barang" name="nomor_senjata" placeholder="Pilih Nomor Senjata" class="form-control" autofocus required>
       <datalist id="barang">
   
        <?php 
        foreach ($data_barang as $barang): 
         $daftar = $barang['nomor_senjata'];
        ?>
   
        <option value="<?= $daftar ?>">
   
        <?php endforeach ?>
   
       </datalist>
      </div>
      <button type="submit" class="btn btn-primary float-right">Input Transaksi</button>
      <div class="clearfix"></div>
     </form>
    </div>
    
    <div class="col-md-6">
     <h4>Detail Pengembalian</h4>
     <hr>
     <?php 
     $tanggal_waktu = date('d-m-Y');
     if (isset($_POST['nomor_senjata'])) {
      $nomor_senjata = $_POST['nomor_senjata'];
      $jumlah_pinjam  = 1;
      // $status = $_POST['keterangan'];
      $id_user   = $_SESSION['id_user'];
      $barang = $conn->query("SELECT * FROM senjata LEFT JOIN taruna ON senjata.id_user = taruna.id_user WHERE nomor_senjata='".$nomor_senjata."'");
      $data_barang  = $barang->fetch_array();

      if(!isset($_SESSION['list_peminjaman'])) {
       $_SESSION['list_peminjaman'] = [];
      }

      $pinjam = 1;
      $index = -1;
      $ls_pmj = unserialize(serialize($_SESSION['list_peminjaman']));

      // jika barang sudah ada di daftar list maka akan diupdate
      for ($i=0; $i<count($ls_pmj); $i++) {
        if($ls_pmj[$i]['nomor_senjata'] == $nomor_senjata) {
         $index = $i;
         break;
        }
       }

       // jika list peminjaman kosong
       if($index == -1) {
         $_SESSION['list_peminjaman'][] = [
                        'id_barang' => $data_barang['id_barang'], 
                        'nomor_senjata' => $data_barang['nomor_senjata'], 
                        'Name' => $data_barang['Name']
                       ];
       }
      }

     ?>

     <table class="table table-bordered">
       <tr align="center">
        <th>Nomor Senjata</th>
        <th>Nama Taruna</th>
        <th>Tanggal</th>
        <th>Aksi</th>
       </tr>
        
       <?php 
       if(isset($_SESSION['list_peminjaman'])) {
          $list = unserialize(serialize($_SESSION['list_peminjaman']));
          $index = 0;
         for($i=0; $i<count($list); $i++) {
         ?>

         <tr>
           <td><?php echo $list[$i]['nomor_senjata']; ?></td>
           <td align="center"><?php echo $list[$i]['Name']; ?></td>
           <td align="center"><?php echo $tanggal_waktu; ?></td><td align="center">
            <a href="?index=<?php echo $index; ?>" onclick="return confirm('Anda yakin?')">Hapus</a>
           </td>
          </tr>

         <?php 
          $index++;
         } 

         // hapus barang pada cart
        if(isset($_GET['index'])) {
         $list = unserialize(serialize($_SESSION['list_peminjaman']));
         unset($list[$_GET['index']]);
         $list = array_values($list);
         $_SESSION['list_peminjaman'] = $list;
        }
       }
        ?> 

      </table>

     <form method="POST" action="proses/proses-kembali.php">
      <button type="submit" name="submit" class="btn btn-success btn-block">Proses</button>
     </form>

    </div>
   </div>
  </div>
 </div>
</div>
<script>
  window.onload = function() {
      var input = document.getElementById("barcodeInput").focus();
  }
</script>