<?php
class pekerjaan {

	var $skill;
	var $hasil;
	var $namapekerjaan;

	public function Setskill ( $skill = ' '){
		$this ->skill = $skill ;
	}

	public function Sethasil ( $hasil = ' '){
		$this ->hasil = $hasil ;
	}

	public function Setnamapekerjaan ( $namapekerjaan = ' '){
		$this ->namapekerjaan = $namapekerjaan ;
	}

	public function cetak ( ){
		echo 'skill :'.$this ->skill ;
		echo '<br>';
		echo 'hasil :'.$this ->hasil ;
		echo '<br>' ;
		echo 'namapekerjaan :'.$this ->namapekerjaan ;
		echo '<br>';
		echo '<br>';
	}
}

$penjahit = new pekerjaan ();
$penjahit ->Setskill('menjahit pakaian');
$penjahit ->Sethasil('pakaian');
$penjahit -> Setnamapekerjaan('penjahit');
$penjahit -> cetak ();

$kuli = new pekerjaan ( );
$kuli -> Setskill('ngaduk semen');
$kuli -> Sethasil('bangunan');
$kuli -> Setnamapekerjaan('tukang batu');
$kuli -> cetak ( );

$penyanyi = new pekerjaan ( );
$penyanyi -> Setskill('menyanyi');
$penyanyi -> Sethasil('suara');
$penyanyi -> Setnamapekerjaan('penyanyi');
$penyanyi -> cetak ( );

$wartawan = new pekerjaan ( );
$wartawan -> Setskill('mencari berita');
$wartawan -> Sethasil('berita');
$wartawan -> Setnamapekerjaan('wartawan');
$wartawan -> cetak ( );

$pemulung = new pekerjaan ( );
$pemulung -> Setskill('mengambil barang bekas');
$pemulung -> Sethasil('barang bekas');
$pemulung -> Setnamapekerjaan('pemulung');
$pemulung -> cetak ( );