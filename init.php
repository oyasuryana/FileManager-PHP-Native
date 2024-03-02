<?php
##########################################################
#                UBAH SEPERLUNYA BAGIAN INI              #
##########################################################
#
# 1. User admin
$user='admin';
$pass='202cb962ac59075b964b07152d234b70';

# 2. Seting List Mata Pelajaran
$mapel=['MyOB','Spreadsheet'];

# 3. Seting List Kelas
$kelas=['XII-AKL-1','XII-AKL-2','XII-AKL-3','XII-AKL-4'];

# 4. Generate Kelas dan Mata Pelajaran
#-------------------------------------------------------#
# Bagian ini jangan diubah                              |
#-------------------------------------------------------#

foreach($mapel as $key=>$value){
    if(!file_exists($value)){
        mkdir($value);
		foreach($kelas as $subkey=>$subvalue){
			if(!file_exists($value.'/'.$subvalue)){
				mkdir($value.'/'.$subvalue);
			}
		}
   }
}

?>