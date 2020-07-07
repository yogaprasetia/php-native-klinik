<?php
$koneksi=mysqli_connect ("localhost","root","","klinik");
if (!$koneksi){
    echo "Gagal";
}