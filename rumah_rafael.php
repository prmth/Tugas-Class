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