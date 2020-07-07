<?php 
include "koneksi.php";
$query = $koneksi->query("SELECT * FROM `dokter`");

$pasien = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
            <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas" title="Toggle responsive left sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" title="Klinik Tong Fang">Klinik Tong Fang</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
                <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                    <li class="nav-item"><a class="nav-link" href="admin.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="cekdaftar.php">Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="dokter.php">Dokter</a></li>
                    <li class="nav-item"><a class="nav-link" href="rekammedis.php">Rekam Medis</a></li>
                </ul>
            </div>
            <!--/col-->
           
           
    <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>

<div class="container">
<p>
<a class="btn btn-primary my-lg-3" data-toggle="collapse" href="tambahdokter.php" role="button" aria-expanded="false" aria-controls="collapseExample">
    Daftar Dokter Baru
  </a>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
</p>
</div>

    <div class=container>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No. Id Dokter</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Hari Praktek</th>
      <th scope="col">Poli</th>
      <th scope="col">No HP/WA</th>
</tr>
<?php
    $ambil=mysqli_query ($koneksi,"select * from dokter");
    while ($data=mysqli_fetch_array($ambil)){


    ?>
    <tr>
    <td><?php echo $data['0']; ?></td>
    <td><?php echo $data['1']; ?></td>
    <td><?php echo $data['2']; ?></td>
    <td><?php echo $data['3']; ?></td>
    <td><?php echo $data['4']; ?></td>
    <?php
    }
    ?>
    </thead>
    </table>
</body>
</html>