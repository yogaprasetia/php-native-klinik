<?php 
include "koneksi.php";
$query = $koneksi->query("SELECT * FROM `pasien`");
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
</div>
<?php include 'sidebar.php' ?>
<table class="table table-striped">
<thead>
<tr>
<th scope="col">No. Rekam Medis</th>
<th scope="col">Nama Lengkap</th>
<th scope="col">Keluhan</th>
<th scope="col">Poli</th>
<th scope="col">Tanggal Daftar</th>
<th scope="col">Tanggal Janji</th>
<th scope="col">No HP/WA</th>
<th scope="col">Password Baru</th>
</tr>
<?php
$ambil=mysqli_query ($koneksi,"select * from pasien");
while ($data=mysqli_fetch_array($ambil)){
?>
<tr>
<td><?php echo $data['0']; ?></td>
<td><?php echo $data['1']; ?></td>
<td><?php echo $data['2']; ?></td>
<td><?php echo $data['3']; ?></td>
<td><?php echo $data['4']; ?></td>
<td><?php echo $data['5']; ?></td>
<td><?php echo $data['6']; ?></td>
<td><?php echo $data['7']; ?></td>
</tr>
<?php
}
?>
</thead>
</table>
</div>
</body>
</html>