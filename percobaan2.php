<?php
class mobil
{
var $warna;
var $merk;
function construct()
{
$this -> warna = "Biru";
$this -> merk = "BMW";
}
function gantiWarna ($warnaBaru)
{
$this ->warna = $warnaBaru;
}
function tampilWarna()
{
echo "warna mobilnya : " .$this -> warna;
}
}
$a = new mobil[];
$b = new mobil[];
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();
?>