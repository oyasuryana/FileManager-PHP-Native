<?php
$file =str_replace('//','/',$_GET['file']);
$dirTemp=explode('/',$file);
unlink($file);
echo '<p align="center" class="text-success"><img src="assets/login.gif"/><br/>Sedang menghapus ....</p>';
echo '<meta http-equiv="refresh" content="2; url=index.php?page=dir&name='.$dirTemp[0].'/'.$dirTemp[1].'&pesan=File berhasil dihapus">';

?>