<?php
class PakaianWanita{

	var $Model;
	var $Warna;
	var $Merk;

	public function SetModel($Model = ' '){
		$this ->Model = $Model ;
	}

	public function SetWarna ($Warna = ' '){
		$this ->Warna = $Warna ;
	}

	public function SetMerk ($Merk = ' '){
		$this ->Merk = $Merk ;
	}

	public function cetak ( ){
		echo 'Model:'.$this->Model.'<br>';
		echo 'Warna:'.$this->Warna.'<br>';
		echo 'Merk:'.$this->Merk.'<br>';
	}
}
$A  = new PakaianWanita ( );
$A ->setModel('Hodie');
$A -> SetWarna('Kuning');
$A -> SetMerk('Supreme');
$A -> cetak( );

echo '<br>';

$B  = new PakaianWanita ( );
$B -> SetModel('Sweater');
$B -> SetWarna('Hijau');
$B -> SetMerk('Gucci');
$B -> cetak( );

echo '<br>';

$C  = new PakaianWanita ( );
$C -> SetModel('Blazer');
$C -> SetWarna('Coklat');
$C -> SetMerk('Flava');
$C -> cetak( );

echo '<br>';

$D = new PakaianWanita ( );
$D -> SetModel('Tunik');
$D -> SetWarna('Biru');
$D -> SetMerk('Erere Product');
$D -> cetak( );

echo '<br>';


$D = new PakaianWanita ( );
$D -> SetModel('Blues');
$D -> SetWarna('Putih');
$D -> SetMerk('Ahha');
$D -> cetak( );
?>











