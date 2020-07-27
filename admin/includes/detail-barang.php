
<div class="container mt-5">
 
 <h2>Detail Data Senjata</h2>
 <hr>

 <a href="data-barang.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
 <div class="clearfix"></div>

 <?php 
   $sql = $conn->query("SELECT * FROM taruna WHERE id_user = '".$_GET['id']."'");
   $data = $sql->fetch_assoc();
   $item = $data['No_Senjata'];
 ?>

 <div class="card mt-3">
   <div class="card-header">
   <h3>Nomor Senjata : <?= $data['No_Senjata'] ?></h3>
   </div>
   <div class="card-body">
     <p>Taruna : <?= $data['Name'] ?></p>
     <p>Pangkat : <?= $data['Pangkat'] ?></p>
     <p>Nomor Akademi : <?= $data['No_AK'] ?></p>
     <p>Nomor Senjata : <?= $data['No_Senjata'] ?></p>
     <img alt="<?=$item?>" src="../library/barcode.php?text=<?=$item?>&print=true"/>
   </div>
 </div>

</div>