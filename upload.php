    <h1 class="mt-1">Halaman Pengiriman Hasil Pekerjaan </h1>
	<p>Silahkan upload pekerjaan anda pada form berikut</p>
	<form method="POST" action="index.php?page=doUpload" enctype="multipart/form-data">
		
	  <div class="row mt-3">
		<div class="col">
			<label for="txtNoAbsen" class="form-label fw-bold">No. Absen</label>
		  <input type="text" class="form-control" placeholder="Masukan No Absen" name="txtNoAbsen" id="txtNoAbsen" required autocomplete="off" autofocus>
		</div>
		<div class="col">
			<label for="txtNama" class="form-label fw-bold">Nama Siswa</label>
		  <input type="text" class="form-control" placeholder="Masukan nama lengkap" name="txtNama" required autocomplete="off">
		</div>
	  </div>


	  <div class="row mt-3">
		<div class="col">
			<label for="kelas" class="form-label fw-bold">Kelas</label>
			<select class="form-control"  name="opsiKelas" id="kelas" placeholder="Pilih kelas" required autocomplete="off">
			<?php
			foreach($kelas as $key=>$namaKelas){
				echo '<option value="'.$namaKelas.'">'.$namaKelas.'</option>';	
			}
			?>
			</select>
		</div>
		  <div class="col">
		  <label for="listPekerjaan" class="form-label fw-bold">Jenis Pekerjaan</label>
			<select class="form-control"  name="opsiPekerjaan" id="pekerjaan"  placeholder="Pilih jenis pekerjaan" required autocomplete="off">
			<?php
			foreach($mapel as $key=>$namaMapel){
				echo '<option value="'.$namaMapel.'">'.$namaMapel.'</option>';	
			}
			?>
			</select>
		  </div>
	  </div>
	  <div class="row mt-3">
		<div class="col">
		  <label for="listPekerjaan" class="form-label fw-bold">File Hasil Pekerjaan</label>
			<div class="input-group">
			  <input type="file" class="form-control" name="fileNya"  aria-label="Upload">
			  
			</div>
		</div>
		</div>
		  
		  

	  <div class="row mt-3">
		<div class="col">
		  <button type="submit" class="btn btn-primary">Kirim Hasil Pekerjaan</button>
		</div>
		</div>

	</form>
