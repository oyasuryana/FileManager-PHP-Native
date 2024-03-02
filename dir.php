<h1>Daftar File Pekerjaan</h1>
<p>Berikut ini daftar file hasil pekerjaan <?=str_replace('//','/',$_GET['name']);?></p>

<button class="btn btn-sm btn-danger mb-2" OnClick="history.back()"><i class="fa fa-backward"></i> Kembali</button>

<?php
		if(isset($_GET['pesan'])){
				
			echo '<div class="alert alert-info">'.$_GET['pesan'].'</div>';
		}
?>
<table class="table table-hover table-bordered">
<thead>
	<tr>
		<th class="bg-info">No</th>
		<th class="bg-info">Nama File</th>
		<th class="bg-info">Waktu Upload</th>
		<?=isset($_SESSION['isLogin'])&&$_SESSION['isLogin']==1 ? '<th class="bg-info">Aksi</th>' : null; ?></td>
	</tr>
</thead>
<tbody>

<?php
$dir = $_GET['name'];
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
	 $no=-2; 
    while (($file = readdir($dh)) !== false){
      //  $no++;
		if(is_file($file)){
				
				echo '<td>'.$file . '</td>';
		  } else {
			 if(isset($_GET['name'])){ 
				$no++;
				echo '<tr>';
				echo $file=='.' || $file=='..' ? null :	'<td class="text-right">'.$no.'</td>
														 <td>'.$file . '</td>
														 <td>'. date('d M Y H:i:s',filectime($_GET['name'].'/'.$file)).' wib</td>
														 '.(isset($_SESSION['isLogin']) && $_SESSION['isLogin']==1  ? '<td align="center"><a href="'.$_GET['name'].'/'.$file.'" download>
														 <i class="fa fa-download"></i></a> 
														 <a href="index.php?page=remove&file='.$_GET['name'].'/'.$file.'"><i class="fa fa-trash"></i></a></td>' : null);
														 
			 } else {
				echo '<td><a href="index.php?page=dir&name='.$dir.'/'.$file.'">'.$file.'</a></td>'; 
			 }
		 }	
	  echo '</tr>';
	}
    closedir($dh);
  }
}
?>
</tbody>
</table>