<div class="container mt-5">
  <div class="card">
    <div class="card-body">
    <div class="d-flex justify-content-center mt-5">
    <img src="../assets/logo-aau.png" class="mr-2" width="300" height="300">\
    </div>
    <h1 class="text-center mt-5 mb-5">Aplikasi Pendataan Senjata Akademi Angkatan Udara</h1>
    <div class="row text-center">
      
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <?php 
            $sql = $conn->query("SELECT COUNT(*) AS jumlah FROM peminjaman");
            $peminjaman = $sql->fetch_assoc();
            ?>

            <h5 class="card-title">Data Pengambilan</h5>
            <p class="card-text">Data Senjata yang diambil</p>
            <h4><?= $peminjaman['jumlah']; ?></h4>
            <a href="data-peminjaman.php" class="card-link">Lihat Data Pengambilan</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
  
            <?php 
            $sql = $conn->query("SELECT COUNT(*) AS jumlah FROM senjata");
            $senjata = $sql->fetch_assoc();
            ?>
  
            <h5 class="card-title">Data Senjata</h5>
            <p class="card-text">Jumlah Senjata saat ini</p>
            <h3><?= $senjata['jumlah']; ?></h3>
            <a href="data-barang.php" class="card-link">Lihat Data Senjata</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
  
            <?php 
            $sql = $conn->query("SELECT COUNT(*) AS jmlOpt FROM taruna");
            $opt = $sql->fetch_assoc();
            ?>

            <h5 class="card-title">Data Taruna</h5>
            <p class="card-text">Jumlah Taruna saat ini</p>
            <h3><?= $opt['jmlOpt']; ?></h3>
            <a href="data-petugas.php" class="card-link">Lihat Data Taruna</a>
          </div>
        </div>
      </div>
    </div>

  </div>
 </div>
</div>