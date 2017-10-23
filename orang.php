<?php

class orang {
	public $nama;
	public $tl;
	public $kelas;
	public $status;

	function __construct ($nama, $tl, $kelas, $status) {
		$this->nama = $nama;
		$this->tl = $tl;
		$this->kelas = $kelas;
		$this->status = $status;
	}

	function get_nama() {
		return $this->nama;
	}

	function get_tl() {
		return $this->tl;
	}

	function get_kelas() {
		return $this->kelas;
	}

	function get_status() {
		return $this->status;
	} 
}
?>