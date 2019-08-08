<?php
class pakaianlakilaki{

	var $model;
	var $warna;
	var $merk;

	public function setmodel($model = ''){
		$this->model = $model;
	}

	public function setwarna($warna = ''){
		$this->warna = $warna;
	}

	public function setmerk($merk = ''){
		$this->merk = $merk;
	}

	public function cetak(){
		echo 'model : '.$this->model.'<br>';
		echo 'warna : '.$this->warna.'<br>';
		echo 'merk : '.$this->merk.'<br>';
	}
}

$a = new pakaianlakilaki();
$a->setmodel('jaket');
$a->setwarna('hitam');
$a->setmerk('ahha');
$a->cetak();

echo '<br>';

$b = new pakaianlakilaki();
$b->setmodel('spatu');
$b->setwarna('biru');
$b->setmerk('vans');
$b->cetak();


echo '<br>';

$c = new pakaianlakilaki();
$c->setmodel('celana');
$c->setwarna('putih');
$c->setmerk('gucci');
$c->cetak();


echo '<br>';

$d = new pakaianlakilaki();
$d->setmodel('kaos');
$d->setwarna('hitam');
$d->setmerk('gucci');
$d->cetak();

echo '<br>';

$e = new pakaianlakilaki();
$e->setmodel('topi');
$e->setwarna('coklat');
$e->setmerk('coboy');
$e->cetak();


?>
