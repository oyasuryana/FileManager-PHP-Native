<?php
session_start();
?>
<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
<?php include('init.php');?>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>File Manager</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/bootstrap/css/template.css" rel="stylesheet">
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
  <body class="d-flex flex-column h-100">

    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UKK AKL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
		  <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Hasil Pekerjaan
			  </a>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="index.php?page=MyOB"><i class="fa fa-file-archive-o"></i> MyOB</a></li>
				<li><a class="dropdown-item" href="index.php?page=Spreadsheet"><i class="fa fa-file-excel-o"></i> Spreadsheet</a></li>
			  </ul>
			</li>
          <li class="nav-item">
			<?php if(!isset($_SESSION['isLogin'])){ ?>
				<a class="nav-link active" href="index.php?page=admin">Login </a>
			<?php } else { ?>
				<a class="nav-link active" href="index.php?page=logout">Logout </a>			
			<?php } ?>
          </li>

        </ul>

      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
	<?php if(isset($_GET['page'])) { 
		include($_GET['page'].'.php');
	} else  { ?>
	    <h1 class="mt-1">UKK Akuntansi dan Keuangan Lembaga</h1>
		<p>Aplikasi ini digunakan untuk mengirim hasil pekerjaan Uji Kompetensi Keahlian AKuntansi dan Keuangan Lembaga tahun <?=(date('Y')-1).'/'.date('Y');?>
		<p>File yang harus dikirimkan :</p>
		<ol>
			<li>File MyOB</li>
			<li>File MS Excel</li>
		</ol>
		<p>Untuk melihat hasil pekerjaan silahkan cek di menu <em>Daftar Hasil Pekerjaan</em>.</p>	
		<p><a href="index.php?page=upload" class="btn btn-primary btn-lg"><i class="fa fa-cloud-upload"></i> Upload File Disini</a></p>	
	<?php 
		if(isset($_GET['pesan'])){
				
			echo '<div class="alert alert-info">'.$_GET['pesan'].'</div>';
		}

/*
			$directory_1 = 'MyOB/';
			$files1 = scandir($directory_1);
		
			$directory_2 = 'Spreadsheet/';
			$files2 = scandir($directory_2);
			
			echo 'MyOB '.(count($files1)-2).' File<br/>';	
			echo 'Spreadsheet '.(count($files2)-2).' File<br/>';	
*/
		
	} ?>
  </div>
</main>

<footer class="footer mt-auto py-3 bg-body-tertiary">
  <div class="container">
    <span class="text-body-secondary">UKK AKL @<?=date('Y');?> By. DivIT SMK Negeri 2 Kuningan</span>
  </div>
</footer>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/bootstrap/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);
    });    
</script>
    </body>
</html>
