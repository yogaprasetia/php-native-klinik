<?php 
include "koneksi.php";
$query = $koneksi->query("SELECT * FROM `pasien`");
$pasien = mysqli_num_rows($query); ?>

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
<?php include 'sidebar.php' ?>
<div class="card bg-success text-white h-100">
	<div class="card-body bg-success">
		<div class="rotate">
			<i class="fa fa-user fa-4x"></i>
		</div>
		<h6 class="text-uppercase">Total Pasien</h6>
		<h1 class="display-4"><?php echo number_format($pasien,0,",","."); ?></h1>
	</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 py-2">
<div class="card text-white bg-warning h-100">
	<div class="card-body">
		<div class="rotate">
			<i class="fa fa-share fa-4x"></i>
		</div>
		<h6 class="text-uppercase">Total Poli</h6>
		<h1 class="display-4">4</h1>
	</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 py-2">
<div class="card text-white bg-primary h-100">
<div class="card-body">
	<div class="rotate">
		<i class="fa fa-share fa-4x"></i>
	</div>
	<h6 class="text-uppercase">Total Dokter</h6>
	<h1 class="display-4"><?php echo number_format($iddokter,0,",","."); ?></h1>
</div>
</div>
</div>
</div>
</body>
</html>