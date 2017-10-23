<?php

require_once 'orang.php';

$orang = new orang ("Alif Firmansyah", "Bandung", "XI RPL 2", "Pelajar");
	echo "Nama = ".$orang->get_nama().'<br>';
	echo "Tempat Lahir = ".$orang->get_tl().'<br>';
	echo "Kelas = ".$orang->get_kelas().'<br>';
	echo "Status = ".$orang->get_status().'<br>';
?>