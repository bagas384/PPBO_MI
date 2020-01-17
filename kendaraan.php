<?php
class bengkel{

	private $merk;
	private $harga;
	
	function __construct($merk,$harga) {
		$this->merk=$merk;
		$this->harga=$harga;
	}
	function BacaMerk(){
		return $this->merk;
	}
	
	function BacaHarga(){
		return $this->harga;
	}
}
	$motor = new bengkel("PE 28",1000000);
	
	echo "merk karbu = ".$motor->BacaMerk()."<br/>";
	echo "Harga karbu = ".$motor->BacaHarga()."<br/>";
	echo "-----------------------------------<br/><br/>";
	
	$motor2 = new bengkel("Yamalube", 50000);
	
	echo "merk Oli = ".$motor2->BacaMerk()."<br/>";
	echo "Harga Oli = ".$motor2->BacaHarga()."<br/>";
	echo "-----------------------------------<br/><br/>";
	
	$motor3 = new bengkel("IRC", 750000);
	
	echo "merk Ban = ".$motor3->BacaMerk()."<br/>";
	echo "Harga Ban = ".$motor3->BacaHarga()."<br/>";
	
	
?>