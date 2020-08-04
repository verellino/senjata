<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SENJATA AAU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/bg2.css">
</head>
<body>

  <?php
  session_start();
  // memunculkan pesan error
  if(isset($_SESSION['error'])) {
  ?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <center><?= $_SESSION['error']; ?></center>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
    </button>
  </div>

  <?php
  }
  ?>

  <div class="card col-sm-4 mx-auto mt-5">
    <h5 class="card-header">Form Login</h5>
    <div class="card-body">
      <form action="proses/login_proses.php" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Masukan Username" autofocus>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Masukan Password">
        </div>
        <div class="form-group">
          <label for="level">Sebagai</label>
          <select name="level" class="form-control">
            <option value="">-- Masuk Sebagai ---</option>
            <option value="2">Operator</option>
            <option value="1">Admin</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>