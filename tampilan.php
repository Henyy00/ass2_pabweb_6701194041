
<!DOCTYPE  html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">DATA NILAI SISWA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="tampilan.php">Data Nilai</a>
          <a class="nav-link" href="about.html">About</a>
          <a class="nav-link" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </nav>


<div class="container text-center" >
  <br>
<h3 >DATA NILAI SISWA</h3>
<a type="button" class="btn btn-info"class='btn btn-blue' href="tambah.php">Tambah </a>
</div>


<div class="container">
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">SEMESTER</th>
      <th scope="col">IPK</th>
      <th scope="col">AKSI I</th>
      <th scope="col">AKSI II</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"SELECT * FROM ipk");
    while($d = mysqli_fetch_array($data)){
      ?>

    <tr>
    <td><?php echo $d['semester']; ?></td>
    <td><?php echo $d['ipk']; ?></td>
    <td><a class='btn btn-warning' href="edit.php?semester=<?php echo $d['semester'];?>">EDIT</a></td>
    <td><a class='btn btn-danger' href="hapus.php?semester=<?php echo $d['semester']; ?>"> HAPUS</td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>