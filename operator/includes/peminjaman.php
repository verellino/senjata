<div class="container mt-5">
 <div class="card">
  <div class="card-header">
   Petugas : <?= $_SESSION['name'] ?>
  </div>
  <div class="card-body">
   <div class="row">
    <div class="col-md-6">
     <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-3" autocomplete="off">
      <div class="form-group">
       <label for="id_barang">Nomor Senjata</label>
       <input list="barang" name="nomor_senjata" placeholder="Pilih Nomor Senjata" class="form-control" required>
       <datalist id="barang">
   
        <?php 
        foreach ($data_barang as $barang): 
         $daftar = $barang['nomor_senjata'];
        ?>
   
        <option value="<?= $daftar ?>">
   
        <?php endforeach ?>
   
       </select>
      </div>
      <button type="submit" class="btn btn-primary float-right">Input Transaksi</button>
      <div class="clearfix"></div>
     </form>
    </div>
    
    <div class="col-md-6">
     <h3>Data Peminjaman</h3>

     <?php 
     if (isset($_POST['nomor_senjata'])) {
      
      $nomor_senjata = trim($_POST['nomor_senjata']);
      $explode_nomor_senjata = explode("-", $nomor_senjata);
      $nomor_senjata_exploded = $explode_nomor_senjata[0];
      // $jumlah_pinjam  = $_POST['jumlah_pinjam'];
      $status = $_POST['keterangan'];
      $id_user   = $_SESSION['id_user'];

      $barang = $conn->query("SELECT * FROM senjata WHERE nomor_senjata='".$nomor_senjata_exploded."'");
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
        if($jumlah_pinjam <= $data_barang['keterangan']) {
         $_SESSION['list_peminjaman'][$i]['keterangan'] = $status;
        } else {
         echo '<div class="alert alert-danger" role="alert"><b>'.$nomor_senjata.'</b> hanya tersedia <b>'.$data_barang['keterangan'].'</b></div>';
        }
        break;
       }
      }

      // jika list peminjaman kosong
      if($index == -1) {
       if($data_barang['status'] < $status) {
        echo '<div class="alert alert-danger" role="alert"><b>'.$nomor_senjata.'</b> hanya tersedia <b>'.$data_barang['keterangan'].'</b></div>';
       } else {
        $_SESSION['list_peminjaman'][] = [
                       'id_barang' => $data_barang['id_barang'], 
                       'nomor_senjata' => $nomor_senjata, 
                       'status' => $status
                      ];
       }
      }
     }

     ?>

      <table class="table table-bordered">
       <tr align="center">
        <th>Nama barang</th>
        <th>Jumlah pinjam</th>
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
           <td align="center"><?php echo $list[$i]['status']; ?></td>
           <td align="center">
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
     
     <hr>

     <form method="post" action="data-barang.php">
      <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
      <div class="row">
       <div class="col-md-6">
        <div class="form-group">
         <label for="tgl-pengembalian">Tgl. Pengembalian</label>
         <input class="form-control" type="date" name="tgl-pengembalian" id="tgl-pengembalian" required>
        </div>
       </div>
       <div class="col-md-6">
        <div class="form-group">
         <label for="peminjam">Peminjam</label>
         <input class="form-control" type="text" name="peminjam" id="peminjam" placeholder="Masukan Nama" required>
        </div>
       </div>
       <div class="clearfix"></div>
      </div>
      <button type="submit" class="btn btn-success btn-block" name="submit">Proses</button>
     </form>

    </div>
   </div>
  </div>
 </div>
</div>

<?php 
 if(isset($_GET["index"])){
  header('Location: index.php');
 } ?>