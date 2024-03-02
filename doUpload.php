<?php
$noAbsen =$_POST['txtNoAbsen'];
$namaSiswa =$_POST['txtNama'];
$jenisPekerjaan =$_POST['opsiPekerjaan']; 
$kelasSiswa =$_POST['opsiKelas'];

$nama = $_FILES['fileNya']['name'];
$lokasi = $_FILES['fileNya']['tmp_name'];
$namabaru = $noAbsen.'-'.$namaSiswa.'-'.$nama;
move_uploaded_file($lokasi, $jenisPekerjaan.'/'.$kelasSiswa.'/'.$namabaru);
echo '<p align="center" class="text-success"><img src="assets/loading.gif"/><br/>Uploading ....</p>';
echo '<meta http-equiv="refresh" content="1.5; url=index.php?pesan=File%20berhasil%20diupload">';
?>