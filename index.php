<?php
//gunakan file config.php
include_once("config.php");

//ambil data dan simpan kedalam variabel result
$result = mysqli_query($conn, "SELECT * FROM cv_data");
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title class="fs-1">Curiculum Vitae</title>
</head>
<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a  class="fs-1" >Curiculum Vitae</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-success" type="submit" ><a href="edit.php">Update</a></button>
      </form>
    </div>
  </div>
</nav>
<!-- Body -->
 <!-- <div class="card">
  <div class="card-body" class="fs-4">
  <div class="card" style="width: 18rem;">
  <img src="<?php $data['foto_path']?>"" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">My Picture</p>
  </div> -->
  <img class="img-responsive" src="<?php $data['foto_path']?>" alt="Chania">
  <!--
</div>
    <h1 class="fs-3"><?php echo $data['nama'];?></h1>
    <p class="fs-4"><?php echo $data['pendidikan'];?></p>
    <p class="fs-4"><?php echo $data['alamat'];?></p>
    <p class="fs-4">Keterampilan      : <?php echo $data['keterampilan'];?></p>
    <p class="fs-4">Pengalaman Kerja  : <?php echo $data['pengalaman_kerja'];?></p>
    <p class="fs-4">Kontak</p>
    <p class="fs-4">Hp : <?php echo $data['telepon'];?> Email : <?php echo $data['email'];?></p>
  </div>
</div> -->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nama</td>
      <td><?php echo $data['nama'];?></td>
    </tr>
    <tr>
      <td>Pendidikan</td>
      <td><?php echo $data['pendidikan'];?></td>
    </tr>
    <tr>
      <td>Keterampilan</td>
      <td><?php echo $data['keterampilan'];?></td>
    </tr>
    <tr>
      <td>Pengalaman</td>
      <td><?php echo $data['pengalaman_kerja'];?></td>
    </tr>
    <tr>
      <td>Kontak</td>
      <td>HP  : <?php echo $data['telepon'];?> Email  : <?php echo $data['email'];?></td>
    </tr>
  </tbody>
</table>
</body>
</html>