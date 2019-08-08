<?php
class sepatu {

	var $Merk;
	var $Warna;
	var $Ukuran;

	public function SetMerk ( $Merk = ' '){
		$this ->Merk = $Merk ;
	}

	public function SetWarna ( $Warna = ' '){
		$this ->Warna = $Warna ;
	}

	public function SetUkuran ( $Ukuran = ' '){
		$this ->Ukuran = $Ukuran ;
	}

	public function cetak ( ){
		echo 'Merk :'.$this ->Merk ;
		echo '<br>';
		echo 'Warna :'.$this ->Warna ;
		echo '<br>' ;
		echo 'Ukuran :'.$this ->Ukuran ;
		echo '<br>';
		echo '<br>';
	}
}

$Tomkins = new sepatu ( );
$Tomkins -> SetMerk('Tomkins');
$Tomkins -> SetWarna('Hitam');
$Tomkins -> SetUkuran(38);
$Tomkins -> cetak ( );

$Ardiles = new sepatu ( );
$Ardiles -> SetMerk('Ardiles');
$Ardiles -> SetWarna('Putih');
$Ardiles -> SetUkuran(41);
$Ardiles -> cetak ( );

$Puma = new sepatu ( );
$Puma -> SetMerk('Puma');
$Puma -> SetWarna('Coklat');
$Puma -> SetUkuran(40);
$Puma -> cetak ( );

$Reebok = new sepatu ( );
$Reebok -> SetMerk('Reebok');
$Reebok -> SetWarna('Merah');
$Reebok -> SetUkuran(39);
$Reebok -> cetak ( );

$Nike = new sepatu ( );
$Nike -> SetMerk('Nike');
$Nike -> SetWarna('Biru');
$Nike -> SetUkuran(42);
$Nike -> cetak ( );