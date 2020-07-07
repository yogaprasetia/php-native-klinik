
<?php
function auto_kode(){
    include 'koneksi.php';
    $num    = '';
    $prefix = 'RM';
    $query  = "SELECT MAX(id) AS kode FROM dokter";
    $run    = mysqli_query($koneksi,$query);
    $data   = mysqli_fetch_array($run);
    $row    = mysqli_fetch_row($run);
    $num    = $data["kode"];
    $number = (int)substr($num, 2,5);
            $number++;
    if ($row > 0) {
        return 'kode telah digunakan';
    } else {
        $value = $prefix.sprintf("%05s", $number);
    }
    return $value;
}
?>

<?php

if(isset($_POST['Submit'])) {
    $iddokter = $_POST['iddokter'];
    $nama = $_POST['nama'];
    $haripraktek = $_POST['haripraktek'];
    $poli = $_POST['poli'];
    $no_hp = $_POST['no_hp'];
    

    include_once("koneksi.php");

    $ambil=mysqli_query ($koneksi,"INSERT INTO `dokter` (`iddokter`, `nama`, `haripraktek`, `poli`, `no_hp`) VALUES ('$iddokter', '$nama', '$haripraktek', '$poli', '$no_hp')");
    if ($iddokter != '' && $nama != '' && $haripraktek != '' && $poli != '' && $no_hp != '') 
    {
        header("Location: ambil.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
</head>
<body>

    <div class="container">
        <br><br>
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">Form Pendaftaran Dokter</div>
                      <div class="card-body">
                          <form action="registrasi.php" method="post">
                          <div class="form-group row">
                                  <label for="id" class="col-md-4 col-form-label text-md-right">No. Id Dokter</label>
                                  <div class="col-md-6">
                                      <input type="text" id="id" class="form-control" name="id" value="<?php echo auto_kode() ?>" readonly>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                  <div class="col-md-6">
                                      <input type="text" id="nama" class="form-control" name="nama" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <label for="keluhan" class="col-md-4 col-form-label text-md-right">Hari praktek</label>
                                <div class="col-md-6">
                                    <input type="text" id="keluhan" class="form-control" name="keluhan" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="poli" class="col-md-4 col-form-label text-md-right">Poli</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="poli" name="poli" required autofocus>
                                        <option>Poli Umum</option>
                                        <option>Poli Gigi</option>
                                        <option>Poli Jantung</option>
                                        <option>Poli Hati</option>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="no_hp" class="col-md-4 col-form-label text-md-right">No HP/WA</label>
                                <div class="col-md-6">
                                    <input type="tel" id="no_hp" class="form-control" name="no_hp" required autofocus>
                                </div>
                            </div>
                           
                              <div class="col-md-6 offset-md-4">
                              <input type="submit" name="Submit" class="btn btn-primary" value="Daftar">
                              </div>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- Include file jquery.min.js -->
    <script src="js/jquery.min.js"></script>

    <!-- Include file boootstrap.min.js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Include library Bootstrap Datepicker -->
    <script src="js/bootstrap-datepicker.min.js"></script>

    <!-- Include file custom.js -->
    <script src="js/custom.js"></script>

</body>
</html>