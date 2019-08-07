<?php
class rumah {

	var $model ;
	var $warna ;
	var $alamat ;

	public function Setmodel ($model = ' '){
		$this ->model = $model ;
	}

	public function Setwarna ($warna = ' '){
		$this ->warna = $warna ;
	}

	public function Setalamat ($alamat = ' '){
		$this ->alamat = $alamat ;
	}

	public function cetak ( ){
		echo 'model :'. $this ->model ; 
		echo '<br>';
		echo 'warna :'. $this ->warna;
		echo '<br>';
		echo 'alamat :'. $this ->alamat ;
		echo '<br>';
		echo '<br>';
	}
}
$a  = new rumah ( );
$a -> Setmodel('Modern');
$a -> Setwarna('merah');
$a -> Setalamat('mlonggo');
$a -> cetak( );

$b  = new rumah ( );
$b -> Setmodel('Tradisional');
$b -> Setwarna('hijau');
$b -> Setalamat('bangsri');
$b -> cetak( );

$c = new rumah ( );
$c -> Setmodel('Joglo');
$c -> Setwarna('orange');
$c -> Setalamat('jepara');
$c -> cetak( );

$d  = new rumah ( );
$d -> Setmodel('sederhana moduler');
$d -> Setwarna('cokelat');
$d -> Setalamat('semarang');
$d -> cetak( );

$e  = new rumah ( );
$e -> Setmodel('Tradisional');
$e -> Setwarna('hijau');
$e -> Setalamat('bangsri');
$e -> cetak( );

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









