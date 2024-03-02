<h1><i class="fa fa-file-archive-o"></i>  Daftar File Pekerjaan <?=$_GET['page'];?></h1>
<p>Berikut ini daftar file hasil pekerjaan mata uji <?=$_GET['page'];?></p>
<div class="row">
<?php
$dir = $_GET['page'].'/';
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
        if(is_file($file)){
			echo  $file . "<br>";
		  } else {
			  
			 $directory = $_GET['page'].'/'.$file;
			$files = scandir($directory); 
 
			 echo $file=='.' || $file=='..' ? null :'
			 <div class="col-md-3">
			 <div class="card mb-3 bg-warning text-white">
				<div class="card-body">
				<a href="index.php?page=dir&name='.$dir.'/'.$file.'" style="text-decoration:none;color:white"><h3><i class="fa fa-folder-o"></i>  '.$file.'</a></h3>
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