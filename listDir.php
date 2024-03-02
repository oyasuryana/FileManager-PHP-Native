<h1><i class="fa fa-file-archive-o"></i>  Daftar File Pekerjaan <?=$_GET['name'];?></h1>
<p>Berikut ini daftar file hasil pekerjaan mata uji <?=$_GET['name'];?></p>
<div class="row">
<?php
$mapel = $_GET['name'].'/';
// Open a directory, and read its contents
if (is_dir($mapel)){
  if ($dh = opendir($mapel)){
    while (($file = readdir($dh)) !== false){
        if(is_file($file)){
			echo  $file . "<br>";
		  } else {
			  
			 $directory = $_GET['name'].'/'.$file;
			$files = scandir($directory); 
 
			 echo $file=='.' || $file=='..' ? null :'
			 <div class="col-md-3">
			 <div class="card mb-3 bg-warning text-white">
				<div class="card-body">
				<a href="index.php?page=dir&name='.$mapel.'/'.$file.'" style="text-decoration:none;color:white"><h3><i class="fa fa-folder-o"></i>  '.$file.'</a></h3>
				<p><em>Terdapat <strong>'.(count($files)-2).'</strong> file hasil pekerjaan yang telah terkumpul.</em></p>
				
				</div>
			 </div>
			 </div>'; 
		 }	
	  
	}
    closedir($dh);
  }
}
?>

</div>