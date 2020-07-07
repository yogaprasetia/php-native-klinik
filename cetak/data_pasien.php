<?php 
require '../vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml('
<p style="text-align: center;"><strong><span style="font-family: Arial, Helvetica, sans-serif;">Data Pasien Klinik Tong Fang</span></strong></p>
<p style="text-align: left;"><span style="font-family: Arial, Helvetica, sans-serif;">No. Rekam Medis :&nbsp;</span></p>
<p style="text-align: left;"><span style="font-family: Arial, Helvetica, sans-serif;">Nama :</span></p>
<p style="text-align: left;"><span style="font-family: Arial, Helvetica, sans-serif;">Keluhan :</span></p>
<p style="text-align: left;"><span style="font-family: Arial, Helvetica, sans-serif;">Tanggal Daftar :</span></p>
<p style="text-align: left;"><span style="font-family: Arial, Helvetica, sans-serif;">Tanggal Janji :</span></p>
<p><span style="font-family: Arial, Helvetica, sans-serif;">No HP/WA :</span></p>
<p><br></p>
<p><em>Harap menunjukkan cetakkan data ini ke klinik saat check in</em></p>
');
$dompdf->setPaper('A5', 'landscape');
$dompdf->render();
$dompdf->stream("data_pasien.pdf", array("Attachment"=>0));
?>