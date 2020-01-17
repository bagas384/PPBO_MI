<?php

class Bagas{
var $nama="Bagas";
function Bagas($n){
$this->nama=$n;
}
function Hallo(){
echo "Saya, Bernadus Bagas Prastowo $this->nama<br>";
}
function Hallo2(){
echo "UNWIDHA,	Klaten $this->nama<br>";
}
function Hallo3(){
echo "Alamat,	Jebugan $this->nama<br>";
}
}
class anak extends Bagas{
}
$test = new Anak("Kelas Manajemen Informatika");
$test->Hallo();
$test = new Anak("Semester 5");
$test->Hallo2();
$test = new Anak("Klaten Utara");
$test->Hallo3();
?>